var countdown;     
$(document).ready(function () {

    /*
    Count down until any date script-
    By JavaScript Kit (www.javascriptkit.com)
    Over 200+ free scripts here!
    Modified by Robert M. Kuhnhenn, D.O. 
    on 5/30/2006 to count down to a specific date AND time,
    and on 1/10/2010 to include time zone offset.
    */

    /*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */

    var current="&nbsp;";        //â€”>enter what you want the script to display when the target date and time are reached, limit to 20 characters
    var year= document.getElementById('countdown_year').value;// $('#countdown_year').val();        //â€”>Enter the count down target date YEAR
    var month= document.getElementById('countdown_month').value;//$('#countdown_month').val();          //â€”>Enter the count down target date MONTH
    var day= document.getElementById('countdown_day').value;//$('#countdown_day').val();           //â€”>Enter the count down target date DAY
    var hour=document.getElementById('countdown_hour').value;          //â€”>Enter the count down target date HOUR (24 hour clock)
    var minute=document.getElementById('countdown_minute').value;        //â€”>Enter the count down target date MINUTE
    var tz=+8;            //â€”>Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)
    var exam_id=document.getElementById('countdown_exam_id').value;
    
    //â€”>    DO NOT CHANGE THE CODE BELOW!    <â€”
    var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

    countdown = function (yr,m,d,hr,min){
        theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;

        var today=new Date(servDateArray[0],servDateArray[1]-1,servDateArray[2],servDateArray[3],servDateArray[4],servDateArray[5]);
        var todayy=today.getYear();
        if (todayy < 1000) {todayy+=1900;}
        var todaym=today.getMonth();
        var todayd=today.getDate();
        var todayh=today.getHours();
        var todaymin=today.getMinutes();
        var todaysec=today.getSeconds();
        var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
        var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
        var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
        var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
        var dd=futurestring-todaystring;
        
//        var date = new Date(futurestring);
//        alert(date.toString());

        var dday=Math.floor(dd/(60*60*1000*24)*1);
        var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
        var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
        var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
        
        if(dmin<=0&&dsec<=0){
                window.location = BASE_URL + '/exam/viewresult/id/'+exam_id;
                $("#count2").html(current);
                $("#count2").css('display', "inline");
                $("#count2").css('width', "390px");

                $("#dday").css('display', "none");
                $("#dhour").css('display', "none");
                $("#dmin").css('display', "none");
                $("#dsec").css('display', "none");

                $("#days").css('display', "none");
                $("#hours").css('display', "none");
                $("#minutes").css('display', "none");
                $("#seconds").css('display', "none");
                $("#spacer1").css('display', "none");
                $("#spacer2").css('display', "none");
            return;
        }
        else {
            $("#count2").css('display', "none");

            //$("#dday").html(dday);
            $("#dhour").html(dhour);
            $("#dmin").html(dmin);
            $("#dsec").html(dsec);

            setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
        }
        
    }


    countdown(year,month,day,hour,minute);


});
