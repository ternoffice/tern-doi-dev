<?php

/**
 * Array2XML: A class to convert array in PHP to XML
 * It also takes into account attributes names unlike SimpleXML in PHP
 * It returns the XML in form of DOMDocument class for further manipulation.
 * It throws exception if the tag name or attribute name has illegal chars.
 *
 * Author : Lalit Patel
 * Modified : Dewi Wahyuni
 * Website: http://www.lalit.org/lab/convert-php-array-to-xml-with-attributes
 * License: Apache License 2.0
 *          http://www.apache.org/licenses/LICENSE-2.0
 * Version: 0.1 (10 July 2011)
 * Version: 0.2 (16 August 2011)
 *          - replaced htmlentities() with htmlspecialchars() (Thanks to Liel Dulev)
 *          - fixed a edge case where root node has a false/null/0 value. (Thanks to Liel Dulev)
 * Version: 0.3 (22 August 2011)
 *          - fixed tag sanitize regex which didn't allow tagnames with single character.
 * Version: 0.4 (18 September 2011)
 *          - Added support for CDATA section using @cdata instead of @value.
 *
 * Usage:
 *       $xml = Array2XML::createXML('root_node_name', $php_array);
 *       echo $xml->saveXML();
 */
class Array2XML
{

    private static $xml = null;
    private static $encoding = 'UTF-8';

    /**
     * Initialize the root XML node [optional]
     * @param unknown_type $version
     * @param unknown_type $encoding
     * @param unknown_type $format_output
     */
    public static function init($version = '1.0', $encoding = 'UTF-8', $format_output = true)
    {
        self::$xml = new DomDocument($version, $encoding);
        self::$xml->formatOutput = $format_output;
        self::$encoding = $encoding;
    }

    /**
     * Convert an Array to XML
     * @param string $node_name - name of the root node to be converted
     * @param array $arr - aray to be converterd
     * @return DomDocument
     */
    public static function &createXML($node_name, $arr=array())
    {
        $xml = self::getXMLRoot();
        $xml->appendChild(self::convert($node_name, $arr));

        self::$xml = null;    // clear the xml node in the class for 2nd time use.
        return $xml;
    }

    /**
     * Convert an Array to XML
     * @param string $node_name - name of the root node to be converted
     * @param array $arr - aray to be converterd
     * @return DOMNode
     */
    private static function &convert($node_name, $arr=array())
    {

        //print_arr($node_name);
        $xml = self::getXMLRoot();
        $node = $xml->createElement($node_name);

        if (is_array($arr))
        {
            // get the attributes first.;
            if (isset($arr['@attributes']))
            {
                foreach ($arr['@attributes'] as $key => $value)
                {

                    if (!self::isValidTagName($key))
                    {
                        throw new Exception('[Array2XML] Illegal character in attribute name. attribute: ' . $key . ' in node: ' . $node_name);
                    }
//                    $node->setAttribute($key, htmlspecialchars(self::bool2str($value), ENT_QUOTES, self::$encoding));
                    $node->setAttribute($key, self::bool2str($value));
                }
                unset($arr['@attributes']); //remove the key from the array once done.
            }

            // check if it has a value stored in @value, if yes store the value and return
            // else check if its directly stored as string
            if (isset($arr['@value']))
            {
//                $node->appendChild($xml->createTextNode(htmlspecialchars(self::bool2str($arr['@value']), ENT_QUOTES, self::$encoding)));
                $node->appendChild($xml->createTextNode(self::bool2str($arr['@value'])));
                unset($arr['@value']);    //remove the key from the array once done.
                //return from recursion, as a note with value cannot have child nodes.
                return $node;
            }
            else if (isset($arr['@cdata']))
            {
                $node->appendChild($xml->createCDATASection(self::bool2str($arr['@cdata'])));
                unset($arr['@cdata']);    //remove the key from the array once done.
                //return from recursion, as a note with cdata cannot have child nodes.
                return $node;
            }
        }

        //create subnodes using recursion
        if (is_array($arr))
        {

            // recurse to get the node for that key
            foreach ($arr as $key => $value)
            {

                if (!self::isValidTagName($key))
                {

                    throw new Exception('[Array2XML] Illegal character in tag name. tag: ' . $key . ' in node: ' . $node_name);
                }
                if (is_array($value) && isset($value[0]))
                {
                    // MORE THAN ONE NODE OF ITS KIND;
                    // if the new array is numeric index, means it is array of nodes of the same kind
                    // it should follow the parent key name
                    foreach ($value as $k => $v)
                    {
                        $node->appendChild(self::convert($key, $v));
                    }
                }
                else
                {
                    // ONLY ONE NODE OF ITS KIND
                    $node->appendChild(self::convert($key, $value));
                }
                unset($arr[$key]); //remove the key from the array once done.
            }
        }

        // after we are done with all the keys in the array (if it is one)
        // we check if it has any text value, if yes, append it.
        if (!is_array($arr))
        {
//            $node->appendChild($xml->createTextNode(htmlspecialchars(self::bool2str($arr), ENT_QUOTES, self::$encoding)));
            $node->appendChild($xml->createTextNode(self::bool2str($arr)));
        }

        return $node;
    }

    /*
     * Get the root XML node, if there isn't one, create it.
     */

    private static function getXMLRoot()
    {
        if (empty(self::$xml))
        {
            self::init();
        }
        return self::$xml;
    }

    /*
     * Get string representation of boolean value
     */

    private static function bool2str($v)
    {
        //convert boolean to text value.
        $v = $v === true ? 'true' : $v;
        $v = $v === false ? 'false' : $v;
        return $v;
    }

    /*
     * Check if the tag name or attribute name contains illegal characters
     * Ref: http://www.w3.org/TR/xml/#sec-common-syn
     */

    private static function isValidTagName($tag)
    {
        $pattern = '/^[a-z_]+[a-z0-9\:\-\.\_]*[^:]*$/i';
        // echo preg_match($pattern,$tag,$matches);
        return preg_match($pattern, $tag, $matches) && $matches[0] == $tag;
    }

    public static function createArray(SimpleXMLElement $xml, $attributesKey=null, $childrenKey=null, $valueKey=null)
    {

        if ($childrenKey && !is_string($childrenKey))
        {
            $childrenKey = '@children';
        }
        if ($attributesKey && !is_string($attributesKey))
        {
            $attributesKey = '@attributes';
        }
        if ($valueKey && !is_string($valueKey))
        {
            $valueKey = '@value';
        }

        $return = array();
        $name = $xml->getName();
        $_value = trim((string) $xml);
        if (!strlen($_value))
        {
            $_value = null;
        };

        if ($_value !== null)
        {
            if ($valueKey)
            {
                $return[$valueKey] = $_value;
            }
            else
            {
                $return = $_value;
            }
        }

        $children = array();
        $first = true;
        foreach ($xml->children() as $elementName => $child)
        {
            $value = Array2XML::createArray($child, $attributesKey, $childrenKey, $valueKey);
            if (isset($children[$elementName]))
            {
                if (is_array($children[$elementName]))
                {
                    if ($first)
                    {
                        $temp = $children[$elementName];
                        unset($children[$elementName]);
                        $children[$elementName][] = $temp;
                        $first = false;
                    }
                    $children[$elementName][] = $value;
                }
                else
                {
                    $children[$elementName] = array($children[$elementName], $value);
                }
            }
            else
            {
                $children[$elementName] = $value;
            }
        }
        if ($children)
        {
            if ($childrenKey)
            {
                $return[$childrenKey] = $children;
            }
            else
            {
                $return = array_merge($return, $children);
            }
        }

        $attributes = array();
        foreach ($xml->attributes() as $name => $value)
        {
            $attributes[$name] = trim($value);
        }
        if ($attributes)
        {
            if ($attributesKey)
            {
                $return[$attributesKey] = $attributes;
            }
            else
            {
                $return = array_merge($return, $attributes);
            }
        }

        return $return;
    }

}
?>