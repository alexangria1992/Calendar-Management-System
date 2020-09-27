var data = {
    current_date: {
        day: "",
        date: "",
        month: "",
        year: "",

    },
    calendar: 
    {
        month: "",
        year: ""

    }
};

// var month_data = [
//     {
//         month_index: 10,
//         amount_of_days:30,
//         starting_day: 4,
//         year: 2019
//     }, {
//         month_index: 11,
//         amount_of_days: 31,
//         starting_day: 6,
//         year: 2019
//     }, {
//         month_index: 0, 
//         amount_of_days: 31,
//         starting_day: 2,
//         year: 2020
//     }, {
//         month_index: 1,
//         amount_of_days: 29,
//         starting_day: 5, 
//         year: 2020
//     }, {
//         month_index: 2,
//         amount_of_days: 31,
//         starting_day: 5,
//         year: 2020
//     }, {
//         month_index: 3,
//         amount_of_days: 30,
//         starting_day: 1,
//         year: 2020
//     }, {
//         month_index: 4,
//         amount_of_days: 31,
//         starting_day: 3,
//         year: 2020
//     }, {
//         month_index: 5,
//         amount_of_days: 30,
//         starting_day: 6,
//         year: 2020
//     }, {
//         month_index: 6,
//         amount_of_days: 31,
//         starting_day: 1,
//         year: 2020
//     }, {
//         month_index: 7,
//         amount_of_days: 31,
//         starting_day: 4,
//         year: 2020
//     }, {
//         month_index: 8,
//         amount_of_days: 30,
//         starting_day: 9,
//         year: 2020
//     }, {
//         month_index: 9,
//         amount_of_days: 31,
//         starting_day: 2,
//         year: 2020
//     }, {
//         month_index: 10,
//         amount_of_days: 30,
//         starting_day: 5,
//         year: 2020
//     } , {
//         month_index: 11,
//         amount_of_days: 31,
//         starting_day: 0,
//         year: 2020
//     } 
    
// ]

function generateMonthData(maxYear)
{
    let data = [{
        month_index: 10,
        amount_of_days:30,
        starting_day: 4,
        year: 2019
    }, {
        month_index: 11,
        amount_of_days: 31,
        starting_day: 6,
        year: 2019
    }];

    let prevMonth = data[data.length - 1];
    let nextStartingDay = (prevMonth.amount_of_days + prevMonth.starting_day) % 7;

    for(let year = 2019; year <= maxYear; year++)
    {
        for(let month = 0; month <= 11; month++){
            let m = {
                month_index: month,
                amount_of_days: new Date(year, month + 1, 0).getDate(),
                starting_day: nextStartingDay,
                year: year
            }

            nextStartingDay = (m.amount_of_days + m.starting_day) % 7;
            data.push(m);
        }
    }
    return data;
}

var month_data = generateMonthData(2030);
console.log(month_data)