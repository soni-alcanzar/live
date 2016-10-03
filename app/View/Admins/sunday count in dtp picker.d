var start = $.datepicker.parseDate('dd M y', $(".datepicker").val());
var end = $.datepicker.parseDate('dd M y', $(".datepicker_2").val());

var startDate = new Date(start);
var endDate = new Date(end);
var totalSundays = 0;

for (var i = startDate; i <= endDate; ){
    if (i.getDay() == 0){
        totalSundays++;
    }
    i.setTime(i.getTime() + 1000*60*60*24);
}
