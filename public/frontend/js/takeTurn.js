'use strict';
$(function () {
    setInterval(function showTime() {
        var now = new Date(Date.now());
        $('.time').html(((now.getHours() < 10) ? '0' + now.getHours() : now.getHours()) + ":" + ((now.getMinutes() < 10) ? '0' + now.getMinutes() : now.getMinutes()) + ":" + ((now.getSeconds() < 10) ? '0' + now.getSeconds() : now.getSeconds()));
    }, 1000);

    $('.taketurn').on('click', function () {
        var $this = $(this);

        if ($this.data().left == 0) {
            $this.prop('disabled', true);
            return false;
        }

        $.getJSON($data.url + '/' + $this.data().taken + '/' + $this.data().left, function (jsonData) {
            updateButton($this, jsonData.data);
        });
        return false;
    });

    function updateButton($this, $data) {
        var $text;

        if ($data.taken) {
            $this.attr('data-taken', false).removeClass('btn-warning').addClass('btn-primary');
            $text = 'TOMAR';
        } else {
            if ($data.left == 0) {
                $this.attr('data-taken', true).removeClass('btn-primary').removeClass('btn-warning').addClass('btn-danger').prop('disabled', true);
            } else {
                $this.attr('data-taken', true).removeClass('btn-primary').addClass('btn-warning');
            }

            $text = 'SOLTAR';
        }

        $this.attr('data-left', $data.left);
        var $small = '<small class="count">' + '(' + $data.left + '/' + $this.data().total + ')</small>';
        $this.html($text + ' ' + $small);
    }
});