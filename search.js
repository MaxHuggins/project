function searchForText() {
			var search = document.getElementById("search").value;
			var text = document.getElementById("textarea").innnerHTML;
			var len = text.value.indexOf(search);
			window.alert(l);
			
			if(len!=-1){
				document.getElementById("textarea")focus();
				document.getElementById("textarea").innnerHTML.selectionStart = len;
				document.getElementById("textarea").innnerHTML.selectionEnd = len + search.length;
				window.alert("found");
			}
			else{
				window.alert("not found");
			}
		} 


