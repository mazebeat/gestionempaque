'use strict';
$(function () {
    setInterval(function showTime() {
        var now = new Date(Date.now());
        $('.time').html(((now.getHours() < 10) ? '0' + now.getHours() : now.getHours()) + ":" + ((now.getMinutes() < 10) ? '0' + now.getMinutes() : now.getMinutes()) + ":" + ((now.getSeconds() < 10) ? '0' + now.getSeconds() : now.getSeconds()));
    }, 1000);

    $('.taketurn').on('click', function () {
        var $this = $(this);
        var $data = $this.data();

        if ($data.left == 0) {
            $this.prop('disabled', true);
            return false;
        }

        $.getJSON($data.url, function(jsonData){
            console.log(jsonData);
        });

        return false;
    });

    function init($this, $data, json) {
        var text = '';
        if ($data.taken) {
            $data.left++;
            $data.taken = false;
            $this.removeClass('btn-warning').addClass('btn-primary')
            text = 'Tomar';
        } else {
            $data.left--;
            if ($data.left == 0) {
                $this.removeClass('btn-primary').removeClass('btn-warning').addClass('btn-danger').prop('disabled', true)
            } else {
                $this.removeClass('btn-primary').addClass('btn-warning')
            }
            $data.taken = true;
            text = 'Soltar';
        }

        var $count = $data.left + "/" + $data.total;

        var $small = $('small');
        $small.text($count)
        $this.html($small).data($data);
    }

});