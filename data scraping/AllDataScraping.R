###anth/soci, classics, asian/chin/arab, math/stat, astro/physics


departmentsData <- read.csv("departments.csv")
departments <- departmentsData$Website.Listing.of.Department
departmentsAbb <- departmentsData$Abbreviation
total <- data.frame(Department=character(), Number=character(), Name=character())

for(j in 1:length(departments)){
  department <- toString(departments[j])
  departmentAbb <- toString(departmentsAbb[j])
  URL <- paste0("https://www.amherst.edu/academiclife/departments/", department ,"/courses?display=curriculum")
  rawHTML <- paste(readLines(URL), collapse = "\n")

  tmp <- strsplit(rawHTML, "<h4>")
  tmp <- unlist(tmp)
  tmp <- tmp[-c(1, length(tmp))]

  n <- length(tmp)

  dep <- rep(departmentAbb, n)
  numbers <- 1:n
  names <- 1:n

  for(i in 1:n){
    tmp2 <- tmp[i]
    numAndName <- unlist(strsplit(tmp2, "</h4>"))[1]
    numbers[i] <- unlist(strsplit(numAndName, " "))[1]
    names[i] <- substring(numAndName,5)
  }

  courses <- data.frame(Department=dep, Number=numbers, Name=names)
  total <- rbind(total, courses)
}



write.csv(total, "allCourses.csv")
#test <- tmp[1]
#test <- gsub("&nbsp;", "", test)
#fallProf <- unlist(strsplit(test, "fall semester: "))
#fallProf <- unlist(strsplit(fallProf, " "))[1]





###Asian Languages:

asian <- total[total$Department=='ASLC',]

j = 1
abbs <- c("ARAB", "ASLC", "CHIN", "JAPA")
prevNum <- 0

deps <- 1:nrow(asian)

for(i in 1:nrow(asian)){
  class <- asian[i,]
  number <- toString(asian[i,]$Number)
  number <- substr(number, 1, 3)
  number <- as.numeric(number)
  
  if(number < prevNum){
    j = j + 1
  }
  
  deps[i] <- abbs[j]
  
  prevNum <- number  
}

asian$Department <- deps







###Anthro/Soci Languages:

anth <- total[total$Department=='ANTH',]

j = 1
abbs <- c("ANTH", "SOCI")
prevNum <- 0

deps <- 1:nrow(anth)

for(i in 1:nrow(anth)){
  class <- anth[i,]
  number <- toString(anth[i,]$Number)
  number <- substr(number, 1, 3)
  number <- as.numeric(number)
  
  if(number < prevNum){
    j = j + 1
  }
  
  deps[i] <- abbs[j]
  
  prevNum <- number  
}

anth$Department <- deps










###Classics:

clas <- total[total$Department=='CLAS',]

j = 1
abbs <- c("CLAS", "GREE", "LATI")
prevNum <- 0

deps <- 1:nrow(clas)

for(i in 1:nrow(clas)){
  class <- clas[i,]
  number <- toString(clas[i,]$Number)
  number <- substr(number, 1, 3)
  number <- as.numeric(number)
  
  if(number < prevNum){
    j = j + 1
  }
  
  deps[i] <- abbs[j]
  
  prevNum <- number  
}

clas$Department <- deps









###math/stat:

math <- total[total$Department=='MATH',]

j = 1
abbs <- c("MATH", "STAT")
prevNum <- 0

deps <- 1:nrow(math)

for(i in 1:nrow(math)){
  class <- clas[i,]
  number <- toString(math[i,]$Number)
  number <- substr(number, 1, 3)
  number <- as.numeric(number)
  
  if(number < prevNum){
    j = j + 1
  }
  
  deps[i] <- abbs[j]
  
  prevNum <- number  
}

math$Department <- deps









###physics/astro:

astr <- total[total$Department=='PHYS',]

j = 1
abbs <- c("ASTR", "PHYS")
prevNum <- 0

deps <- 1:nrow(astr)

for(i in 1:nrow(astr)){
  class <- astr[i,]
  number <- toString(astr[i,]$Number)
  number <- substr(number, 1, 3)
  number <- as.numeric(number)
  
  if(number < prevNum){
    j = j + 1
  }
  
  deps[i] <- abbs[j]
  
  prevNum <- number  
}

astr$Department <- deps









head(total)

totalFoo <- total
total <- total[total$Department!='ASLC',]
total <- total[total$Department!='ANTH',]
total <- total[total$Department!='CLAS',]
total <- total[total$Department!='MATH',]
total <- total[total$Department!='PHYS',]

total <- rbind(total, asian)
total <- rbind(total, anth)
total <- rbind(total, clas)
total <- rbind(total, math)
total <- rbind(total, astr)

write.csv(total, "allCourses.csv")
