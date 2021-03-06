
                function fillInCalendar()
                {
         
                    updateCalendarDates();

                    var monthToFillIn = {}
                    var previousMonthIndex;
                    month_data.forEach(function(month, i){
                        if(month.year == data.calendar.year && month.month_index == data.calendar.month )
                        {
                            monthToFillIn = month;
                            previousMonthIndex = i - 1;
                            return;
                        }
                    })
                    let days = document.getElementsByTagName("td");
                    let currentMonthCount = 1;
                    let previousMonthCount = month_data[previousMonthIndex].amount_of_days - monthToFillIn.starting_day + 1;
                    let nextMonthCount = 1;
                    let uid;
                    removeCurrentDay();
                    cleanCells(days);

                    for(let i = 0; i < days.length; i++)
                    {
                        //Filling current month
                        if(monthToFillIn.starting_day <= i && currentMonthCount <= monthToFillIn.amount_of_days)
                        {
                            fillPartialMonthData(days[i], currentMonthCount, monthToFillIn, "current");
                            // days[i].innerHTML = currentMonthCount
                            // uid = getUID(monthToFillIn.month_index, monthToFillIn.year, currentMonthCount)
                            // days[i].setAttribute("data-uid", uid)
                            // if(currentMonthCount == data.current_date.date && calendarIsCurrentMonth())
                            // {
                            //     days[i].setAttribute("id", "current-day");
                            // }
                            // appendSpriteToCellAndTooltip(uid, days[i]);
                            currentMonthCount++;

                        }
                        //Filling previous month
                        else if(currentMonthCount <= monthToFillIn.amount_of_days)
                        {
                            fillPartialMonthData(days[i], previousMonthCount, month_data[previousMonthIndex], "previous");
                            days[i].classList.add("color");
                            // days[i].innerHTML = previousMonthCount;
                            // uid = getUID(month_data[previousMonthIndex].month_index, month_data[previousMonthIndex].year, previousMonthCount)
                            // days[i].setAttribute("data-uid", uid)
                            // if(previousMonthCount == month_data[previousMonthIndex].amount_of_days)
                            // {
                            //     days[i].classList.add("prev-month-last-day");
                            // }
                            // appendSpriteToCellAndTooltip(uid, days[i]);
                            previousMonthCount++;

                        }

                        //Filling next month
                        else 
                        {
                            fillPartialMonthData(days[i], nextMonthCount, month_data[monthToFillIn.month_index + 1], "next");
                            days[i].classList.add("color");
                            // days[i].innerHTML = nextMonthCount;
                            // uid = getUID(monthToFillIn.month_index + 1, monthToFillIn.year, nextMonthCount )
                            // days[i].setAttribute("data-uid", uid)
                            // appendSpriteToCellAndTooltip(uid, days[i]);
                            nextMonthCount++;

                        }
                    }
                    changeColor();

                }

                function fillPartialMonthData(day, count, monthObject, month)
                {
                   day.innerHTML = count;
                   if(month == "current")
                   {
                         if(count == data.current_date.date && calendarIsCurrentMonth())
                            {
                                day.setAttribute("id", "current-day");
                            }
                        }
                        else 
                        {
                            day.classList.add("color");
                            if(month == "previous" && count == monthObject.amount_of_days)
                            {
                                console.log("true")
                                day.classList.add("prev-month-last-day")
                            }
                        }
                        uid = getUID(monthObject.month_index, monthObject.year, count);
                        day.setAttribute("data-uid", uid);
                        appendSpriteToCellAndTooltip(uid, day);
                        
            

                }

                function getUID(month, year, day){
                    if(month == 12){
                        month = 0;
                        year++;
                    }
                    return month.toString() + year.toString() + day.toString();
                }


                function appendSpriteToCellAndTooltip(uid, elem)
                {
                    for(let i = 0; i < post_its.length; i++)
                    {
                        if(uid == post_its[i].id)
                        {
                            elem.innerHTML += `<img src='images/note${post_its[i].note_num}.png' alt='A post it note'>`
                            elem.classList.add("tooltip-default")
                            elem.innerHTML += `<span>${post_its[i].note}</span>`
                        }
                    }
                }
                function cleanCells(cells)
                {

                    removeCurrentDay();
                    var tableCells = document.getElementsByTagName("td")
                    for(let i = 0; i < tableCells.length; i++)
                    {
                        removeClass(tableCells[i], "color");
                        removeClass(tableCells[i], "prev-month-last-day");
                        removeClass(tableCells[i], "tooltip-default");
                        removeAttribute(tableCells[i], "style");
                        // if(tableCells[i].classList.contains("color"))
                        // {
                        //     tableCells[i].classList.remove("color");
                        // }
                        // if(tableCells[i].classList.contains("prev-month-last-day"))
                        // {
                        //     tableCells[i].classList.remove("prev-month-last-day")
                        // }

                        // if(tableCells[i].classList.contains("tooltip-default"))
                        // {
                        //     tableCells[i].classList.remove("tooltip-default")
                        // }


                        // if(tableCells[i].hasAttribute("style"))
                        // {
                        //     tableCells[i].removeAttribute("style")
                        // }

                    }

                }


                function removeCurrentDay()
                {
                    if(document.getElementById("current-day"))
                    {
                        document.getElementById("current-day").removeAttribute("id");
                    }
                }

                function calendarIsCurrentMonth()
                {
                    if(data.current_date.year == data.calendar.year && data.current_date.month == data.calendar.month)
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                }

                function nextMonth()
                {
                    if(data.calendar.month != 11 || data.calendar.year != month_data[month_data.length - 1].year )
                    {
                        data.calendar.month++;
                    }
                    if(data.calendar.month >= 12)
                    {
                        data.calendar.month = 0;
                        data.calendar.year++;
                    }
                    fillInCalendar();
                
                }

                function previousMonth()
                {
                    if(data.calendar.month != 11 || data.calendar.year != month_data[0].year  )
                    {
                        data.calendar.month--;
                    }
                    if(data.calendar.month <= -1)
                    {
                        data.calendar.month = 11;
                        data.calendar.year--;
                    }
                    fillInCalendar();
                }

                document.addEventListener('keydown', function(e){
                    switch(e.keyCode)
                    {
                        case 37: previousMonth();
                        break;
                        case 39: nextMonth();
                        break;
                    }
                })
