$(function () {
	var availableTags = [
		"अँग्रेज़",
"अच्छा",
"अमरीकन",
"अलमारी",
"आदमी",
"आप",
"आशा",
"और",
"एक",
"कमरा",
"काफ़ी",
"कुरसी",
"क्या",
"ख़ाली",
"खिड़की",
"गाड़ी",
"गुजराती",
"चाचा",
"चिड़िया",
"छोटा",
"जनवरी",
"ज़रूर",
"जर्मन",
"जापानी",
"जी नहीं",
"जी हाँ",
"ठीक",
"तीन",
"तुम",
"दादी",
"दूसरा",
"दोनों",
"नमस्ते",
"नहीं",
"पंखा",
"पंजाबी",
"पत्थर",
"पलंग",
"पाकिस्तानी",
"पिता",
"पुराना",
"प्रति",
"बग़ीचा",
"बच्चा",
"बड़ा",
"बहुत",
"बहू",
"बूढ़ा",
"भारतीय",
"भाषा",
"मकान",
"माता",
"मानव",
"मारुति",
"मूर्ति",
"मेज़",
"मैं",
"यह",
"यहाँ",
"ये",
"रविवार",
"राजा",
"रूसी",
"लड़का",
"लड़की",
"लाल",
"लोग",
"वह",
"वे",
"शुक्रिया",
"सफ़ेद",
"साइकिल"
		

	];
	var minWordLength = 2;

	function split(val) {
		return val.split(' ');
	}

	function extractLast(term) {
		return split(term).pop();
	}
	$("#note-textarea")
		// don't navigate away from the field on tab when selecting an item
		.on("input","click", function (event) {
			if (event.keyCode === $.ui.keyCode.TAB && $(this).data("ui-autocomplete").menu.active) {
				event.preventDefault();
			}
		}).autocomplete({
			minLength: minWordLength,
			source: function (request, response) {
				// delegate back to autocomplete, but extract the last term
				var term = extractLast(request.term);
				if (term.length >= minWordLength) {
					response($.ui.autocomplete.filter(availableTags, term));
				}
			},
			focus: function () {
				// prevent value inserted on focus
				return false;
			},
			select: function (event, ui) {
				var terms = split(this.value);
				// remove the current input
				terms.pop();
				// add the selected item
				terms.push(ui.item.value);
				// add placeholder to get the comma-and-space at the end
				terms.push("");
				this.value = terms.join(" ");
				return false;
			}
		});
});