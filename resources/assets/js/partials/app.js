jQuery(document).ready(function($){

    var options = {

        url: "/search",

        getValue: function(element) {
            return element.first_name + " "+ element.last_name;
        },

        list: {
            maxNumberOfElements: 10,

            match: {
                enabled: true
            },

            showAnimation: {
                type: "fade", //normal|slide|fade
                time: 400,
                callback: function() {}
            },

            hideAnimation: {
                type: "slide", //normal|slide|fade
                time: 400,
                callback: function() {}
            },

            onSelectItemEvent: function() {
                var user = $("#user").getSelectedItemData();
                $('#user_id').val(user.id);
            },

            onClickEvent: function () {
                var user = $("#user").getSelectedItemData();
                window.location.href = '/desaparecidos/' + user.id + '/edit';
            }
        },

        template: {
            type: "iconLeft",
            fields: {
                iconSrc: "photo"
            }

        },

        ajaxSettings: {
            dataType: "json",
            method: "GET",
            data: {
            }
        },

        preparePostData: function(data) {
            data.term = $("#user").val();
            return data;
        },

        theme: "bootstrap",

        requestDelay: 500,

    };
    $("#user").easyAutocomplete(options);


});


