
jQuery(document).ready(function($){

    var options = {

        url: "/search",

        list: {
            match: {
                enabled: true
            }
        },

        theme: "bootstrap",

        getValue: function(element) {
            return element.name;
        },

        ajaxSettings: {
            dataType: "json",
            method: "GET",
            data: {
            }
        },

        preparePostData: function(data) {
            data.phrase = $("#search_user").val();
            return data;
        },

        requestDelay: 500
    };

    $("#search_user").easyAutocomplete(options);
	
});