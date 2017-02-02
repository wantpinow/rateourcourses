function loadCourses() {
	var n = departmentdata.length;
	var coursesLists = new Array(n+1);
	coursesLists["empty"] = ["Select a Department"]; 
	
	var departments = new Array(n);
	var c = 0;
	
	for(i=0; i<n; i++){
		
		dep = departmentdata[i].Abbreviation;
		courses = new Array(0);
		
		for(j=0; j<coursedata.length; j++){
			course = coursedata[j];
			if(dep == course.Department){
				
				if(course.Name.length > 30){
					course.Name = course.Name.substring(0,29) + "...";
				}
				courses.push(course);	
			}
			c++;
		}
		coursesLists[dep] = courses;
	}
	return coursesLists;
}

function loadFaculty() {
	var n = departmentdata.length;
	var facultyLists = new Array(n+1);
	var c=0;
	for(i=0; i<n; i++){
		faculty = new Array(0);
		dep = departmentdata[i].Abbreviation;
		for(j=0; j<facultydata.length; j++){
			fac = facultydata[j];
			if(dep == fac.Department){
				faculty.push(fac);	
			}
			c++;
		}
		facultyLists[dep] = faculty;
	}
	
	return facultyLists;
}

