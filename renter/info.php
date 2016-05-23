<?php
/* Copyright (C) 2015-2016  Alexandre Spangaro <aspangaro.dolibarr@gmail.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 * or see http://www.gnu.org/
 */

/**
 * \file    	immobilier/renter/info.php
 * \ingroup 	Immobilier
 * \brief   	Info of renter's card
 */
$res = @include ("../../main.inc.php"); // For root directory
if (! $res)
	$res = @include ("../../../main.inc.php"); // For "custom" directory
if (! $res)
	die("Include of main fails");

require_once ('../core/lib/immobilier.lib.php');
require_once DOL_DOCUMENT_ROOT.'/core/lib/functions2.lib.php';
require_once ('../class/renter.class.php');

$langs->load("immobilier@immobilier");

$id = GETPOST('rowid')?GETPOST('rowid','int'):GETPOST('id','int');

// Security check
if (! $user->rights->immobilier->renter->read)
	accessforbidden();

/*
 * View
 */

llxHeader();

if ($id)
{
	$object = new Renter($db);
	$object->fetch($id);
	$object->info($id);

	$head = renter_prepare_head($object);

	dol_fiche_head($head, 'info', $langs->trans("RenterCard"), 0, 'user');

    print '<table width="100%"><tr><td>';
    dol_print_object_info($object);
    print '</td></tr></table>';

    print '</div>';
}

$db->close();

llxFooter();
