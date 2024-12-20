-- Copyright (C) 2018-2019 Philippe GRAND 	<philippe.grand@atoo-net.com>
--
-- This program is free software: you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation, either version 3 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program.  If not, see http://www.gnu.org/licenses/.


CREATE TABLE llx_ultimateimmo_immocost(
	-- BEGIN MODULEBUILDER FIELDS
	rowid integer AUTO_INCREMENT PRIMARY KEY NOT NULL, 
	ref varchar(128) NOT NULL, 
	entity integer DEFAULT 1 NOT NULL, 
	label varchar(255), 
	fk_property integer,
	fk_owner integer,
	fk_soc integer,	
	fk_cost_type integer,
	note_public text, 
	note_private text, 
	amount double(24,8) DEFAULT NULL, 
	amount_ht double(24,8) DEFAULT NULL,
	amount_vat double(24,8) DEFAULT NULL,
	date_start date NOT NULL, 
	date_end date NOT NULL, 
	date_creation datetime NOT NULL, 
	tms timestamp NOT NULL, 
	fk_user_creat integer NOT NULL, 
	fk_user_modif integer, 
	import_key varchar(14), 
	dispatch smallint,
	status integer NOT NULL
	-- END MODULEBUILDER FIELDS
) ENGINE=innodb;