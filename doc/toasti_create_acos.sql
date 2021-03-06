/*
-- Query: SELECT * FROM toasti_db.acos
LIMIT 0, 1000

-- Date: 2012-12-18 18:06
*/
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (50,NULL,NULL,NULL,'controllers',1,98);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (51,50,NULL,NULL,'Companies',2,13);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (52,51,NULL,NULL,'index',3,4);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (53,51,NULL,NULL,'view',5,6);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (54,51,NULL,NULL,'add',7,8);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (55,51,NULL,NULL,'delete',9,10);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (56,51,NULL,NULL,'edit',11,12);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (57,50,NULL,NULL,'Groups',14,25);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (58,57,NULL,NULL,'index',15,16);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (59,57,NULL,NULL,'view',17,18);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (60,57,NULL,NULL,'add',19,20);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (61,57,NULL,NULL,'edit',21,22);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (62,57,NULL,NULL,'delete',23,24);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (63,50,NULL,NULL,'Pages',26,29);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (64,63,NULL,NULL,'display',27,28);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (65,50,NULL,NULL,'Users',30,49);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (66,65,NULL,NULL,'index',31,32);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (67,65,NULL,NULL,'view',33,34);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (68,65,NULL,NULL,'add',35,36);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (69,65,NULL,NULL,'edit',37,38);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (70,65,NULL,NULL,'delete',39,40);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (71,65,NULL,NULL,'login',41,42);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (72,65,NULL,NULL,'logout',43,44);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (73,65,NULL,NULL,'initDB',45,46);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (74,50,NULL,NULL,'AclExtras',50,51);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (75,50,NULL,NULL,'Events',52,61);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (76,75,NULL,NULL,'index',53,54);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (77,75,NULL,NULL,'add',55,56);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (78,75,NULL,NULL,'delete',57,58);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (79,75,NULL,NULL,'edit',59,60);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (86,50,NULL,NULL,'Contacts',62,73);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (87,86,NULL,NULL,'index',63,64);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (88,86,NULL,NULL,'view',65,66);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (89,86,NULL,NULL,'add',67,68);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (90,86,NULL,NULL,'delete',69,70);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (91,86,NULL,NULL,'edit',71,72);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (97,50,NULL,NULL,'Cooperations',74,85);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (98,97,NULL,NULL,'index',75,76);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (99,97,NULL,NULL,'view',77,78);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (100,97,NULL,NULL,'add',79,80);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (101,97,NULL,NULL,'delete',81,82);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (102,97,NULL,NULL,'edit',83,84);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (103,50,NULL,NULL,'Sectors',86,97);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (104,103,NULL,NULL,'index',87,88);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (105,103,NULL,NULL,'add',89,90);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (106,103,NULL,NULL,'delete',91,92);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (107,103,NULL,NULL,'edit',93,94);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (108,65,NULL,NULL,'profile',47,48);
INSERT INTO `acos` (`id`,`parent_id`,`model`,`foreign_key`,`alias`,`lft`,`rght`) VALUES (109,103,NULL,NULL,'view',95,96);
