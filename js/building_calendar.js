
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
                            days[i].innerHTML = currentMonthCount;
                            uid = getUID(monthToFillIn.month_index, monthToFillIn.year, currentMonthCount)
                            days[i].setAttribute("data-uid", uid)
                            if(currentMonthCount == data.current_date.date && calendarIsCurrentMonth())
                            {
                                days[i].setAttribute("id", "current-day");
                            }
                            appendSpriteToCellAndTooltip(uid, days[i]);
                            currentMonthCount++;

                        }
                        //Filling previous month
                        else if(currentMonthCount <= monthToFillIn.amount_of_days)
                        {
                            days[i].classList.add("color");
                            days[i].innerHTML = previousMonthCount;
                            uid = getUID(month_data[previousMonthIndex].month_index, month_data[previousMonthIndex].year, previousMonthCount)
                            days[i].setAttribute("data-uid", uid)
                            if(previousMonthCount == month_data[previousMonthIndex].amount_of_days)
                            {
                                days[i].classList.add("prev-month-last-day");
                            }
                            appendSpriteToCellAndTooltip(uid, days[i]);
                            previousMonthCount++;

                        }

                        //Filling next month
                        else 
                        {
                            days[i].classList.add("color");
                            days[i].innerHTML = nextMonthCount;
                            uid = getUID(monthToFillIn.month + 1, monthToFillIn.year, nextMonthCount )
                            days[i].setAttribute("data-uid", uid)
                            appendSpriteToCellAndTooltip(uid, days[i]);
                            nextMonthCount++;

                        }
                    }
                    changeColor();

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
                            elem.innerHTML += `<img src='images/note${$post_its[i].note_num}.png' alt='A post it note'>`
                            elem.classList.add("tooltip-default")
                            elem.innerHTML += `<span>${post_its[i].note}</span>`
                        }
                    }
                }
                function cleanCells(cells)
                {

                    removeCurrentDay();
                    for(let i = 0; i < cells.length; i++)
                    {
                        if(cells[i].classList.contains("color"))
                        {
                            cells[i].classList.remove("color");
                        }
                        if(cells[i].classList.contains("prev-month-last-day"))
                        {
                            cells[i].classList.remove("prev-month-last-day")
                        }

                        if(cells[i].hasAttribute("style"))
                        {
                            cells[i].removeAttribute("style")
                        }
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
