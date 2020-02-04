 var pickerWeekNums = new Pikaday({
        showWeekNumber: true,
        field: document.getElementById('datepicker-week-numbers'),
        firstDay: 1,
        minDate: new Date(2000, 0, 1),
        maxDate: new Date(2020, 12, 31),
        yearRange: [2000, 2020]
    });