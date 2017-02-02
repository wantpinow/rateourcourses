var coursesLists = loadCourses();

function courseChange(selectObj) { 
	var idx = selectObj.selectedIndex; 
	var which = selectObj.options[idx].value; 
	cList = coursesLists[which];
	var cSelect = document.getElementById("Number"); 
	var len=cSelect.options.length; 
	while (cSelect.options.length > 0) { 
		cSelect.remove(0);
	}
	var newOption; 
	
	
	for (var i=0; i<cList.length; i++) { 
		var str = "";
		newOption = document.createElement("option");
		newOption.text= str.concat(cList[i].Number," : ",cList[i].Name);
		try { 
			cSelect.add(newOption);
		} 
		catch (e) {
			cSelect.appendChild(newOption); 
		} 
	}

}
 
 
 
 
var facultyLists = loadFaculty();

function facultyChange(selectObj) {
	var idx = selectObj.selectedIndex;
	var which = selectObj.options[idx].value;
	cList = facultyLists[which];
	var cSelect = document.getElementById("Professor_Name");
	var len=cSelect.options.length; 
	while (cSelect.options.length > 0) { 
		cSelect.remove(0); 
	} 
	var newOption; 
	for (var i=0; i<cList.length; i++) { 
		newOption = document.createElement("option");
		newOption.text= cList[i].Name;
		try { 
			cSelect.add(newOption);
		} 
		catch (e) {
			cSelect.appendChild(newOption); 
		} 
	}

	newOption = document.createElement("option");
	//newOption.value= "other";
	newOption.text = "other"; 
	try { 
		cSelect.add(newOption);
	} 
	catch (e) {
		cSelect.appendChild(newOption); 
	} 
 }