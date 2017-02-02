departmentsData <- read.csv("departments.csv")
departments <- departmentsData$Website.Listing.of.Department
departmentsAbb <- departmentsData$Abbreviation
total <- data.frame(Department=character(), Name=character())

for(j in 1:length(departments)){
  department <- toString(departments[j])
  departmentAbb <- toString(departmentsAbb[j])
  URL <- paste0("https://www.amherst.edu/academiclife/departments/", department ,"/faculty")
  rawHTML <- paste(readLines(URL), collapse = "\n")

  tmp <- strsplit(rawHTML, "s details")
  tmp <- unlist(tmp)
  tmp <- tmp[-1]

  n <- length(tmp)

  dep <- rep(departmentAbb, n)
  names <- 1:n

  for(i in 1:n){
    tmp2 <- tmp[i]
    namePlus <- unlist(strsplit(tmp2, ">"))[2]
    names[i] <- substring(namePlus,1, nchar(namePlus)-3)
  }

  courses <- data.frame(Department=dep, Name=names)
  total <- rbind(total, courses)
}




asian <- total[total$Department=='ASLC',]
anth <- total[total$Department=='ANTH',]
clas <- total[total$Department=='CLAS',]
math <- total[total$Department=='MATH',]
astr <- total[total$Department=='PHYS',]


asian$Department = "ARAB"
total <- rbind(total, asian)
asian$Department = "CHIN"
total <- rbind(total, asian)
asian$Department = "JAPA"
total <- rbind(total, asian)

anth$Department = "SOCI"
total <- rbind(total, anth)

clas$Department = "GREE"
total <- rbind(total, clas)
clas$Department = "LATI"
total <- rbind(total, clas)

math$Department = "STAT"
total <- rbind(total, math)

astr$Department = "ASTR"
total <- rbind(total, astr)


write.csv(total, "allFaculty.csv")
#test <- tmp[1]
#test <- gsub("&nbsp;", "", test)
#fallProf <- unlist(strsplit(test, "fall semester: "))
#fallProf <- unlist(strsplit(fallProf, " "))[1]