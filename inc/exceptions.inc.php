<?php
// File           udfs.inc.php / FirebirdWebAdmin
// Purpose        functions working with exceptions, included from accessories.php
// Author         Lutz Brueckner <irie@gmx.de>
// Copyright      (c) 2000, 2001, 2002, 2003, 2004, 2005 by Lutz Brueckner,
//                published under the terms of the GNU General Public Licence v.2,
//                see file LICENCE for details


//
// return an array with the properties of the exceptions defined in the database
//
function get_exceptions($order = 1, $dir = 'ASC')
{
    global $dbhandle;

    $sql = 'SELECT E.RDB$EXCEPTION_NAME AS ENAME,'
        . ' E.RDB$MESSAGE AS MSG'
        . ' FROM RDB$EXCEPTIONS E'
        . ' ORDER BY ' . $order . ' ' . $dir;
    $res = fbird_query($dbhandle, $sql) or fb_error(__FILE__, __LINE__, $sql);

    $exceptions = array();
    while ($obj = fbird_fetch_object($res)) {
        $exceptions[trim($obj->ENAME)] = trim($obj->MSG);
    }

    return $exceptions;
}

//
// return the html displaying the user defined functions in a table
//
function get_exceptions_table($exceptions, $order, $dir)
{
    global $acc_strings;

    $heads = array('Name', 'Message');

    $html = "<table class=\"table table-bordered table-hover\">\n"
        . "  <thead><tr align=\"left\">\n";

    foreach ($heads as $idx => $head) {
        $url = url_session($_SERVER['PHP_SELF'] . '?excorder=1&order=' . ($idx + 1));
        $title = $acc_strings[$head];
        if ($order == $idx + 1) {
            $title = $dir == 'ASC' ? '*&nbsp;' . $title : $title . '&nbsp;*';
        }

        $html .= '    <th class="detail"><a href="' . $url . '">' . $title . "</a></th>\n";
    }

    $html .= "  </tr></thead>\n";

    foreach ($exceptions as $ename => $msg) {
        $html .= "  <tr>\n"
            . '    <td class="detail">' . $ename . "</td>\n"
            . '    <td class="detail">' . $msg . "</td>\n"
            . "  </tr>\n";
    }

    $html .= "</table>\n";

    return $html;
}

//
// return the html for a exception selectlist
//
function get_exception_select($name, $sel = null, $empty = true, $tags = array())
{
    global $s_exceptions;

    $enames = array_keys($s_exceptions);
    sort($enames);

    return get_selectlist($name, $enames, $sel, $empty, $tags);
}

//
// create an exception from the definitions in $exception_defs
//
function create_exception($exception_defs)
{
    global $dbhandle, $fb_error, $lsql;

    $lsql = 'CREATE EXCEPTION ' . $exception_defs['name'] . " '" . str_replace("'", "''", $exception_defs['msg']) . "'";
    if (DEBUG) {
        add_debug('lsql', __FILE__, __LINE__);
    }

    if (!@fbird_query($dbhandle, $lsql)) {
        $fb_error = fbird_errmsg();
    }

    return empty($fb_error);
}

//
// create an exception from the definitions in $exception_defs
//
function modify_exception($exception_defs)
{
    global $dbhandle, $fb_error, $lsql;

    $lsql = 'ALTER EXCEPTION ' . $exception_defs['name'] . " '" . str_replace("'", "''", $exception_defs['msg']) . "'";
    if (DEBUG) {
        add_debug('lsql', __FILE__, __LINE__);
    }

    if (!@fbird_query($dbhandle, $lsql)) {
        $fb_error = fbird_errmsg();
    }

    return empty($fb_error);
}

//
// drop the user defined function $name off the database
//
function drop_exception($name)
{
    global $s_exceptions, $dbhandle;
    global $fb_error, $lsql;

    $lsql = 'DROP EXCEPTION ' . $name;
    if (DEBUG) {
        add_debug('lsql', __FILE__, __LINE__);
    }
    if (!@fbird_query($dbhandle, $lsql)) {
        $fb_error = fbird_errmsg();

        return false;
    } else {
        unset($s_exceptions[$name]);

        return true;
    }
}
