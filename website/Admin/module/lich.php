<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="Bootstrap-style-Datetime-Picker-Plugin/src/jquery.datetimepicker.js"></script>
</head>
<style type="text/css">
#wrapper {
    width: 780px;
    margin: auto;
}



.log-wrapper {
    float: right;
}

.log {
    max-height: 300px;
    overflow: auto;
}

.log .log__entry {
    margin: .1em 0;
    padding: .1em .2em;
    border: 1px solid black;
    white-space: nowrap;
}
</style>

<body>
    <div id="demo2"></div>
</body>

</html>
<script>
$(document).ready(function() {
    $('#demo2').datetimepicker({
        date: new Date(),
        viewMode: 'YMD',
        onDateChange: function() {
            $('#date-text2').text(this.getText());
            $('#date-text-ymd2').text(this.getText('YYYY-MM-DD'));
            $('#date-value2').text(this.getValue());
        }
    });
})
</script>