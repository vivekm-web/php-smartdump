<?php

/**
 * php-smartdump
 *
 * say good bye to vardump/print_r/<pre>
 * this file takes care of all of this and gives you simple and
 * easy to use helper functions
 *
 * PHP version 5 and above
 *
 * LICENSE: MIT License

 * (Copyright (c) 2018 vivekm-web

 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category   php-smartdump
 * @package    php-smartdump
 * @author     Vivek M <vivekm-web@gamil.com>
 * @copyright  2018-present
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    0.1
 * @link       https://github.com/vivekm-web/php-smartdump
 * @since      File available since Release 0.1
 */


 /**
 * dd
 *
 * dd stands for dump and die
 *
 * @access	public
 * @param	$variable mixed
 * @return	mixed
 */
function dd($variable)
{
   var_dump($variable);
   exit;
}

/**
 * pp
 *
 * pp stands for pre and print
 *
 * @access  public
 * @param   $variable mixed
 * @return  mixed
 */
function pp($variable)
{
   echo '<pre>';
   print_r($variable);
   echo '</pre>';
}

/**
 * pp
 *
 * pp stands for pre and die
 *
 * @access  public
 * @param   $variable mixed
 * @return  mixed
 */
function pd($variable)
{
   echo '<pre>';
   print_r($variable);
   echo '</pre>';
   exit;
}
