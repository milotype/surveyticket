<?php

/*
  ------------------------------------------------------------------------
  Surveyticket
  Copyright (C) 2012-2017 by the Surveyticket plugin Development Team.

  ------------------------------------------------------------------------

  LICENSE

  This file is part of Surveyticket plugin project.

  Surveyticket plugin is free software: you can redistribute it and/or modify
  it under the terms of the GNU Affero General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  Surveyticket plugin is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU Affero General Public License for more details.

  You should have received a copy of the GNU Affero General Public License
  along with Surveyticket plugin. If not, see <http://www.gnu.org/licenses/>.

  ------------------------------------------------------------------------

  @package   Surveyticket plugin
  @author    David Durieux
  @author    Infotel
  @copyright Copyright (c) 2012-2017 Surveyticket plugin team
  @license   AGPL License 3.0 or (at your option) any later version
  http://www.gnu.org/licenses/agpl-3.0-standalone.html
  @link      https://github.com/pluginsGLPI/surveyticket
  @since     2012

  ------------------------------------------------------------------------
 */


include ("../../../inc/includes.php");

$plugin = new Plugin();

if ($plugin->isActivated("surveyticket")) {
   if (Session::haveRightsOr("plugin_surveyticket", array(CREATE, READ, UPDATE))) {
      Html::header(PluginSurveyticketSurveyQuestion::getTypeName(2),'',"config","PluginSurveyticketMenu", "question");

      Search::show('PluginSurveyticketQuestion');

      Html::footer();
  } else {
      Html::displayRightError();
   }

} else {
   Html::displayRightError();

}
