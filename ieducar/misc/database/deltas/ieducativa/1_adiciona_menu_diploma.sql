-- //

--
-- Adiciona menu relatório diploma.
--
-- @author   Lucas D'Avila <lucas@ieducativa.com.br>
-- @license  @@license@@
-- @version  $Id$

-- relatorios / cadastrais / diploma

INSERT INTO portal.menu_submenu VALUES(40001, 55, 2, 'Diploma', 'module/Reports/Diploma', NULL, 3);
INSERT INTO pmicontrolesis.menu VALUES(40001, 40005, 999300, 'Diploma', 3, 'module/Reports/Diploma', '_self', 1, 15, 122);

-- //@UNDO

DELETE FROM pmicontrolesis.menu WHERE cod_menu = 40005;
DELETE FROM portal.menu_submenu WHERE cod_menu_submenu = 40005;

-- //
