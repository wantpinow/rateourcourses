departments <- read.csv("departments.csv")
departments <- departments$department

for(j in 1:length(departments)){
  department <- toString(departments[j])
  URL <- paste0("https://www.amherst.edu/academiclife/departments/", department ,"/courses?display=curriculum")
  rawHTML <- paste(readLines(URL), collapse = "\n")

  tmp <- strsplit(rawHTML, "<h4>")
  tmp <- unlist(tmp)
  tmp <- tmp[-c(1, length(tmp))]

  n <- length(tmp)

  numbers <- 1:n
  names <- 1:n

  for(i in 1:n){
    tmp2 <- tmp[i]
    numAndName <- unlist(strsplit(tmp2, "</h4>"))[1]
    numbers[i] <- unlist(strsplit(numAndName, " "))[1]
    names[i] <- substring(numAndName,5)
  }

  filename <- paste0("data/courses_", department, ".csv")
  courses <- data.frame(Number=numbers, Name=names)
  write.csv(courses, filename)
}


#test <- tmp[1]
#test <- gsub("&nbsp;", "", test)
#fallProf <- unlist(strsplit(test, "fall semester: "))
#fallProf <- unlist(strsplit(fallProf, " "))[1]

