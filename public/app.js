import "./assets/css/style.css";

// *** LIB *** //

import DME from "../js/lib/DME";
import StdFunc from "../js/lib/StdFunc";
import StdStr from "../js/lib/StdStr";

// *** CLASS *** //
import Trigger from "../js/class/Trigger";
import ShortCut from "../js/class/ShortCut";

// *** TEMPS *** //

// *** RULES *** //

window.addEventListener("load", (e) => {
	new ShortCut(DME.shortCutButtons).Init({
		AnimationsSetting: Array.from(document.querySelectorAll("#animationsSetting .ops-button")),
		ColorsSetting: Array.from(document.querySelectorAll("#colorsSetting .ops-button")),
	});
});
