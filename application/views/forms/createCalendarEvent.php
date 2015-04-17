<div id="body" class="width">

    <script type="application/javascript">
        function updateCalendar(){
            var form_date = document.getElementById("date");
            var split = form_date.value.split('-');

            var year = split[0];
            var month = split[1];
            var day = split[2];

            document.getElementById("year").value = year;
            document.getElementById("month").value = month;
            document.getElementById("day").value = day;
        }

    </script>

    <form action="calendar/createCalendarEvent" method="POST">
        <fieldset>
            <legend>Create Calendar Event</legend>
            <label>Date</label><input type="date" id="date" name="date" placeholder="yyyy-mm-dd" onchange="updateCalendar()" tabindex="0"><br />

            <label>Year</label><input type="date" id="year" name="year" readonly="readonly" tabindex="99"><br />
            <label>Month</label><input type="date" id="month" name="month" readonly="readonly" tabindex="99"><br />
            <label>Day</label><input type="date" id="day" name="day" readonly="readonly" tabindex="99"><br />

            <label>Event Info</label><textarea name="event" rows="6" cols="50" tabindex="1"></textarea><br />
            <label>Show</label><?php echo form_dropdown("show", $optionYN); ?><br/>
        </fieldset>

        <label>&nbsp;</label><input type="submit" value="Create Event">
    </form>

    <div class="clear"></div>
</div>
