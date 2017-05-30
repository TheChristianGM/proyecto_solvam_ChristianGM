        $(document).ready(function () {
            $("#divProgress").circularloader({
                backgroundColor: "#DCDCDC",//background colour of inner circle
                fontColor: "#000000",//font color of progress text
                fontSize: "60px",//font size of progress text
                radius: 85,//radius of circle
                progressBarBackground: "#cdcdcd",//background colour of circular progress Bar
                progressBarColor: "#008B8B",//colour of circular progress bar
                progressBarWidth: 25,//progress bar width
                progressPercent: 0,//progress percentage out of 100
                progressValue: 0,//diplay this value instead of percentage
                showText: false,//show progress text or not
                title: "Hora del descanso!",//show header title for the progress bar
            });
            var sec = 1;
            var timer = setInterval(function () {
                $("#divProgress").circularloader({
                    progressValue:sec,
                    progressPercent: (sec/60*100)
                });
                sec++;
				if(sec > 60)
					sec = 1;
            }, 1000);
        });