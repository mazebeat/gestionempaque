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
            return;
        }

        // init($this, $data, {});
        $.getJSON($data.url + '/' + $data.taken + '/' + $data.left, function (jsonData) {
            init($this, jsonData.data, {});
        });
        return false;
    });

    function init($this, $data, json) {
        var text = '';
        $data.total = $this.data().total;
        $data.url = $this.data().url;

        $this.attr('data-left', $data.left);

        if ($data.taken) {
            $this.attr('data-taken', false);
            $this.removeClass('btn-warning').addClass('btn-primary')
            text = 'Tomar';
        } else {
            if ($data.left == 0) {
                $this.removeClass('btn-primary').removeClass('btn-warning').addClass('btn-danger').prop('disabled', true)
            } else {
                $this.removeClass('btn-primary').addClass('btn-warning')
            }
            $this.attr('data-taken', true);
            text = 'Soltar';
        }

        console.log($this.find('.count'))
        // $this.html(te);
        // var $small = $('small').addClass('count').text('(' + $data.left + '/' + $data.total + ')');
        $this.html(text + ' <small class="count">' + '(' + $data.left + '/' + $data.total + ')</small>');
    }


    // -------------------------------
    //
    // function getTurn(turnid) {
    //     var dynamicData = {};
    //     dynamicData["id"] = turnid;
    //     // Returns the jQuery ajax method
    //     return $.ajax({
    //         url: "/admin/frontend/",
    //         type: "get",
    //         data: dynamicData
    //     });
    // }
    //
    // var person1 = getName("2342342"),
    //     person2 = getName("3712968"),
    //     people = [person1, person2];
    //
    // $.when.apply(this, people).then(function () {
    //     // Both the ajax requests have completed
    // });
});