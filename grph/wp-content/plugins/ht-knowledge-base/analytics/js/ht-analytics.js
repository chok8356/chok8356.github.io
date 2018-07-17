(function($){
  var monthlyVisitsData = {};
  var totalSearchesData = {};
  var monthlySearchesData = {};

  var beginDateStamp;
  var endDateStamp;

  var currentTab = hkbAnalyticsChart.tab;


    //begining point date picker (filterDate1)
    var beginDatePicker = $('#filterDate1').datepicker({
      dateFormat : hkbAnalyticsChart.dateFormat,
      onSelect: function(dateText) {
          console.log('begin');
          syncBeginDate();
          updateAllStats();
          updateUserMetaDates();
        }
    });


    //if there is aleady a user meta for begin date, set the picker to that
    if(hkbAnalyticsChart.userBeginDate){
      //PHP timestamp in seconds, JS in miliseconds
      var userBeginDate = new Date(parseInt(hkbAnalyticsChart.userBeginDate)*1000);
      $("#filterDate1").datepicker("setDate", userBeginDate);
    } else {
      var lastMonth = new Date();
      lastMonth.setMonth(lastMonth.getMonth() - 1);
      $("#filterDate1").datepicker("setDate", lastMonth);
    }
    
    //sync the beginning date set by the user to the global beginDateStamp    
    function syncBeginDate(){
      $("#filterDate1").datepicker();
      var date = $("#filterDate1").datepicker("getDate");
      //get time, convert to seconds and add offset
      beginDateStamp = (date.getTime()/1000) + 0;
    }

    //call sync
    syncBeginDate();

    //end point date picker (filterDate2)
    var endDatePicker = $('#filterDate2').datepicker({
      dateFormat : hkbAnalyticsChart.dateFormat,
      onSelect: function(dateText) {
          syncEndDate();
          updateAllStats();
          updateUserMetaDates();
        }
    });

    //if there is aleady a user meta for end date, set the picker to that
    if(hkbAnalyticsChart.userEndDate){
      //PHP timestamp in seconds, JS in miliseconds
      var userEndDate = new Date(parseInt(hkbAnalyticsChart.userEndDate)*1000);
      $("#filterDate2").datepicker("setDate", userEndDate);
    } else {
      var thisMonth = new Date();
      $("#filterDate2").datepicker("setDate", thisMonth);
    }
    
    //sync the end date set by the user to the global beginDateStamp  
    function syncEndDate(){
      $("#filterDate2").datepicker();
      var date = $("#filterDate2").datepicker("getDate");
      //get time, convert to seconds and add offset
      endDateStamp = (date.getTime()/1000) + 86400;
    }

    //call sync
    syncEndDate();

    //Send the user dates to the server to update the begin and end user meta
    function updateUserMetaDates(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq':'updateusermetadates',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-analyticsdate'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('Updated user meta dates');
            }
        });
    }


    /** Dashboard Tab **/

    /** Line Graph - Monthly views */
    function monthlyViews(){
        //clear the canvas
        var canvas = $('.chart-canvas--monthly-views')[0]; 
        canvas.width = canvas.width;
        //clear the messages
        $('.hkb-dashbox--monthly-views-messages').empty();
        $.ajax({
        url: ajaxurl,
        dataType:'JSON',
        data:{
         'aq':'kbviewsmonthly',
         'action': 'hkba_dynamic_stats',
         'nonce': getSecurity('.chart-canvas--monthly-views'),
         'begin': beginDateStamp,
        'end': endDateStamp
        },
        success: function(data) {
           monthlyVisitsData = {
             labels: data.labels,
             datasets: [
                 {
                     fillColor: "rgba(41, 128, 185,0.2)",
                     strokeColor: "rgba(41, 128, 185,1.0)",
                     pointColor: "rgba(41, 128, 185,1.0)",
                     pointStrokeColor: "rgba(41, 128, 185,1.0)",
                     pointHighlightFill: "rgba(52, 73, 94,1.0)",
                     pointHighlightStroke: "rgba(52, 73, 94,1.0)",
                     data: data.values
                 }
             ]
           };
          if(data.values.length != 0){
            var can1 = $('.chart-canvas--monthly-views');
            var ctx1 = can1.get(0).getContext("2d");
            var myLineChart = new Chart(ctx1).Line(monthlyVisitsData, {
              responsive: true,
              maintainAspectRatio: false
            } );
          } else {
            $('.hkb-dashbox--monthly-views-messages').append('<span class="no-results">' + hkbAnalyticsChart.notEnoughResultsString + '</div>')
          }
         },
         error: function(err){
           console.log(err.responseText);
         }
      });

    }

    //Article Count
    function newArticles(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq':'newarticlescount',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.new-articles'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got new articles');
                $('.new-articles-count').html(data.count);
                $('.new-articles-count--label').html(data.label);
            }
        });
    }

    //Article Count
    function articleTotal(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'totalarticles',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardmetrics__totalarticles_value'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got article total');
                $('.hkb-dashboardmetrics__totalarticles_value').html(data.count);
                $('.hkb-dashboardmetrics__totalarticles_value').attr('title', data.label);
                $('.hkb-dashboardmetrics__totalarticles_label').attr('title', data.label);
            }
        });
    }


    //Article Count
    function articlesPeriod(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'articlesperiod',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardmetrics__articlesperiod_value'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got articles in period');
                $('.hkb-dashboardmetrics__articlesperiod_value').html(data.count);
                $('.hkb-dashboardmetrics__articlesperiod_value').attr('title', data.label);
                $('.hkb-dashboardmetrics__articlesperiod_label').attr('title', data.label);
            }
        });
    }


    //Article Views
    function articleVisits(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'articlevisits',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardmetrics__articleviews_value'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got articles visits in period');
                $('.hkb-dashboardmetrics__articleviews_value').html(data.count);
                $('.hkb-dashboardmetrics__articleviews_value').attr('title', data.label);
                $('.hkb-dashboardmetrics__articleviews_label').attr('title', data.label);
            }
        });
    }


    function feedbackOverview(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'feedbackoverview',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardfeedback__stats'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got article feedback summary');
                $('.hkb-dashboardfeedback__good_value').html(data.totalUp);
                $('.hkb-dashboardfeedback__bad_value').html(data.totalDown);
                $('span.hkb-dashboardfeedback__summaryvaluenum').html(data.feedbackArticleSuccess);  
                //feedback success
                $('.hkb-dashboardfeedback__summary').removeClass('hkb-dashboardfeedback__summary--good');   
                $('.hkb-dashboardfeedback__summary').removeClass('hkb-dashboardfeedback__summary--bad');
                if(data.feedbackArticleSuccess>=50){
                  $('.hkb-dashboardfeedback__summary').addClass('hkb-dashboardfeedback__summary--good');
                } else {
                  $('.hkb-dashboardfeedback__summary').addClass('hkb-dashboardfeedback__summary--bad');
                }             
            }
        });
    }


    function searchesOverview(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'searchesoverview',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardsearcheffect__stats'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got searches overview');
                $('.hkb-dashboardsearcheffect__total_value').html(data.totalSuccess);
                $('.hkb-dashboardsearcheffect__failed_value').html(data.totalNull);
                $('span.hkb-dashboardsearcheffect__summaryvaluenum').html(data.feedbackSuccess); 
                //search success
                $('.hkb-dashboardsearcheffect__summary').removeClass('hkb-dashboardsearcheffect__summary--good'); 
                $('.hkb-dashboardsearcheffect__summary').removeClass('hkb-dashboardsearcheffect__summary--bad');  
                if(data.feedbackSuccess>=50){
                  $('.hkb-dashboardsearcheffect__summary').addClass('hkb-dashboardsearcheffect__summary--good'); 
                } else {
                  $('.hkb-dashboardsearcheffect__summary').addClass('hkb-dashboardsearcheffect__summary--bad'); 
                }        
            }
        });
    }

    /* Feedback */

    //Feedback Responses
    function feedbackResponses(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq':'feedbackresponses',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-feedbackbar__block'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got feedback responses');
                console.log(data);
                $('.hkb-feedbackbar_count').html(data.totalResponses);
                $('.hkb-feedbackbar_good').attr('data-hkb-feedbacknum', data.totalUp);
                $('.hkb-feedbackbar_good').attr('style', "width: "+ data.feedbackGoodWidth + "%");
                $('.hkb-feedbackbar_bad').attr('data-hkb-feedbacknum', data.totalDown);
                $('.hkb-feedbackbar_bad').attr('style', "width: "+ data.feedbackBadWidth + "%");
            }
        });
    }


    function feedbackCards(){
        ( function( $, Backbone, _, settings ) {
            'use strict';

            //standard card template
            var cardContentTemplate = document.getElementById( 'ht-analytics-card-template' );
            var cardTemplate = _.template( cardContentTemplate.innerHTML );

            //no comments
            var cardNoCommentsTemplate = document.getElementById( 'ht-analytics-card-nofeedback' );
            var cardNoComments = _.template( cardNoCommentsTemplate.innerHTML );

            console.log('feedback cards');
            //clear old posts 
            $('ul.hkb-feedbacklist').empty();

            $.ajax({
                url: ajaxurl,
                dataType:'JSON',
                data:{
                    'aq':'feedbackcards',
                    'action': 'hkba_dynamic_stats',
                    'nonce': getSecurity('.hkb-feedbacklist'),
                    'begin': beginDateStamp,
                    'end': endDateStamp
                },
                success:function(data){
                    console.log('got feedback cards');
                    var index = 0;
                    if ( data.cards.length > 0 ) {
                        //load posts
                        $.each( data.cards,  function( key, card ) {
                            //note resultsListContainer.append will not work
                            $( 'ul.hkb-feedbacklist' ).append( cardTemplate( { feedback: card, index: index } ) );
                            console.log('card' + index);
                            console.log(card);
                            index++;
                        });
                        feedbackFilterButtons();
                    } else {
                        //load no results 
                       $( 'ul.hkb-feedbacklist' ).append( cardNoComments() );
                    }
                   
                }
            });


        })( jQuery, Backbone, _ );
    }

    /** FEEDBACK FILTER TABS **/
    function feedbackFilterButtons(){
        $('button.hkb-feedbackfilter__btn_all').click(function( event ){
                event.preventDefault();
                removeActiveFromAllFilterButtons();
                $(this).addClass('active');
                showAllFeedbackCards();
            });

        $('button.hkb-feedbackfilter__btn_helpful').click(function( event ){
                event.preventDefault();
                removeActiveFromAllFilterButtons();
                $(this).addClass('active');
                showOnlyHelpfulFeedbackCards();
            });

        $('button.hkb-feedbackfilter__btn_unhelpful').click(function( event ){
                event.preventDefault();
                removeActiveFromAllFilterButtons();
                $(this).addClass('active');
                showOnlyUnhelpfulFeedbackCards();
            });
    }

    function removeActiveFromAllFilterButtons(){
        $('button.hkb-feedbackfilter__btn').removeClass('active');
    }

    function showAllFeedbackCards(){
        $('.hkb-feedbackcard').parent('li').show();
    }

    function showOnlyHelpfulFeedbackCards(){
        $('.hkb-feedbackcard--helpful').parent('li').show();
        $('.hkb-feedbackcard--unhelpful').parent('li').hide();
    }

    function showOnlyUnhelpfulFeedbackCards(){
        $('.hkb-feedbackcard--helpful').parent('li').hide();
        $('.hkb-feedbackcard--unhelpful').parent('li').show();
    }

    /** END FEEDBACK FILTER TABS **/


    /** Searches Tab **/

    /** Total searches donut */
    function totalSearches(){
        //clear the canvas
        var canvas = $('.chart-canvas--search-donut')[0]; 
        canvas.width = canvas.width;
        //clear the messages
        $('.hkb-dashbox--search-donut-messages').empty();

        $.ajax({
          url: ajaxurl,
          dataType:'JSON',
          data:{
           'aq':'totalsearches',
           'action': 'hkba_dynamic_stats',
           'nonce': getSecurity('.chart-canvas--search-donut'),
           'begin': beginDateStamp,
           'end': endDateStamp
          },
         success:function(data){
           totalSearchesData = [
             {
               value: data.totalPopulated,
               color:"#80b847",
               highlight: "#6e9e3e",
               label: hkbAnalyticsChart.returnedResultsString
             },
             {
               value: data.totalNULL,
               color: "#f26c4f",
               highlight: "#d96248",
               label: hkbAnalyticsChart.noResultsString
             }
           ]
           if(data.totalSearches != 0) {
             var can = $('.chart-canvas--search-donut');
             var ctx = can.get(0).getContext("2d");
             var donutchart = new Chart(ctx).Doughnut(totalSearchesData, {
              responsive: true,
              maintainAspectRatio: false,
              percentageInnerCutout: 50,
              segmentShowStroke: false,
              legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
             });
             var legend = donutchart.generateLegend();
             $('.hkb-dashbox--search-donut-messages').append(legend);
           } else {
            $('.hkb-dashbox--search-donut-messages').append('<span class="no-results">' + hkbAnalyticsChart.notEnoughResultsString + '</div>')
           }
         }
        });
    }


    /** Line Graph - Monthly searches */
    function monthlySearches(){
        //clear the canvas
        var canvas = $('.chart-canvas--monthly-searches')[0]; 
        canvas.width = canvas.width;
        //clear the messages
        $('.hkb-dashbox--search-monthly-messages').empty();
        $.ajax({
        url: ajaxurl,
        dataType:'JSON',
        data:{
         'aq':'searchmonthly',
         'action': 'hkba_dynamic_stats',
         'nonce': getSecurity('.chart-canvas--monthly-searches'),
         'begin': beginDateStamp,
        'end': endDateStamp
        },
        success: function(data) {
           monthlySearchesData = {
             labels: data.labels,
             datasets: [
                 {
                     fillColor: "rgba(41, 128, 185,0.2)",
                     strokeColor: "rgba(41, 128, 185,1.0)",
                     pointColor: "rgba(41, 128, 185,1.0)",
                     pointStrokeColor: "rgba(41, 128, 185,1.0)",
                     pointHighlightFill: "rgba(52, 73, 94,1.0)",
                     pointHighlightStroke: "rgba(52, 73, 94,1.0)",
                     data: data.values
                 }
             ]
           };
          if(data.values.length != 0){
            var can1 = $('.chart-canvas--monthly-searches');
            var ctx1 = can1.get(0).getContext("2d");
            var myLineChart = new Chart(ctx1).Line(monthlySearchesData, {
              responsive: true,
              maintainAspectRatio: false
            } );
          } else {
            $('.hkb-dashbox--search-monthly-messages').append('<span class="no-results">' + hkbAnalyticsChart.notEnoughResultsString + '</div>')
          }
         },
         error: function(err){
           console.log(err.responseText);
         }
      });

    }


    /** Exit Tab **/

    //Total Views Count
    function articleViewsTotal(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'totalviewstats',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardmetrics__totalviews_value'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got views total');
                $('.hkb-dashboardmetrics__totalviews_value').html(data.count);
                $('.hkb-dashboardmetrics__totalviews_value').attr('title', data.label);
                $('.hkb-dashboardmetrics__totalviews_label').attr('title', data.label);
            }
        });
    }

    //Total Exits Count
    function exitsTotal(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'totalexitsstats',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardmetrics__totalexits_value'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got exits total');
                $('.hkb-dashboardmetrics__totalexits_value').html(data.count);
                $('.hkb-dashboardmetrics__totalexits_value').attr('title', data.label);
                $('.hkb-dashboardmetrics__totalexits_label').attr('title', data.label);
            }
        });
    }

    //Exit percentage
    function exitsPercentage(){
        $.ajax({
            url: ajaxurl,
            dataType:'JSON',
            data:{
                'aq': 'exitpercentagesstats',
                'action': 'hkba_dynamic_stats',
                'nonce': getSecurity('.hkb-dashboardmetrics__exitpercentage_value'),
                'begin': beginDateStamp,
                'end': endDateStamp
            },
            success:function(data){
                console.log('got exit percentage total');
                $('.hkb-dashboardmetrics__exitpercentage_value').html(data.count);
                $('.hkb-dashboardmetrics__exitpercentage_value').attr('title', data.label);
                $('.hkb-dashboardmetrics__exitpercentage_label').attr('title', data.label);
            }
        });
    }


        /** Total exits donut */
    function exitsSplitDonut(){
        //clear the canvas
        var canvas = $('.chart-canvas--exits-donut')[0]; 
        canvas.width = canvas.width;
        //clear the messages
        $('.hkb-dashbox--exits-donut-messages').empty();
        $.ajax({
          url: ajaxurl,
          dataType:'JSON',
          data:{
           'aq':'exitssplit',
           'action': 'hkba_dynamic_stats',
           'nonce': getSecurity('.chart-canvas--exits-donut'),
           'begin': beginDateStamp,
           'end': endDateStamp
          },
         success:function(data){
           exitsSplitData = [ ];
           if(data.length != 0) {
           // console.log('here');
             var can = $('.chart-canvas--exits-donut');
             var ctx = can.get(0).getContext("2d");
             var donutchart = new Chart(ctx).Doughnut({}, {
              showTooltips: true,
              tooltipTemplate: "<%=label%>",
             });
              data.forEach(function(group) {
                  donutchart.addData({
                        value: group.exitPercentage,
                        color: group.color,
                        highlight: "#C69CBE",
                        label: group.label,                        
                    });
                  }, this);
             var legend = donutchart.generateLegend();
             $('.hkb-dashbox--exits-donut-messages').append(legend);
             donutchart.update();
           } else {
            $('.hkb-dashbox--exits-donut-messages').append('<span class="no-results">' + hkbAnalyticsChart.notEnoughResultsString + '</div>')
           }
         }
        });
    }




    //Reload null searches table
    function nullSearches(){
      nullSearchesTable.ajax.reload();
    }

    //Reload top searches table
    function topSearches(){
      topSearchesTable.ajax.reload();
    }

    //Reload article views table
    function articleViews(){
      articleViewsTable.ajax.reload();
    }



    //Reload recent feedback
    function recentFeedback(){
      recentFeedbackTable.ajax.reload();
    }

    //Reload author stats
    /*
    function authorStats(){
      authorStatsTable.ajax.reload();
    }
    */

    function exitsFromCategories(){
      exitsFromCategoriesTable.ajax.reload();
    }

    function exitsFromArticles(){
      exitsFromArticlesTable.ajax.reload();
    }


    //Update the stats depending on what tab we are on
    function updateAllStats(){

        console.log('currentTab');
        console.log(currentTab)
        
        if('dashboard'==currentTab){

            monthlyViews();
            //article statistics
            newArticles();
            
            articleTotal();
            articlesPeriod();
            articleVisits();

            feedbackOverview();
            searchesOverview();

        } else if('articles'==currentTab){
            //articleViews();
        } else if('feedback'==currentTab){
            //recentFeedback();
            feedbackResponses();
            feedbackCards();
        } else if('search'==currentTab){
            totalSearches();
            monthlySearches();
            nullSearches();
            topSearches();
        } else if('authors'==currentTab){
            //authorStats();
        } else if('exits'==currentTab){
            articleViewsTotal();
            exitsTotal();  
            exitsPercentage();  
            exitsSplitDonut();  
            exitsFromCategories();
            exitsFromArticles();

        } 

    }

    //get the security nonce
    function getSecurity(id){
        return $(id).data('nonce');
    }


    $(document).ready(function() {

        /** Initialize datatables */

        /*
        articleViewsTable = $('table.article-views-result').DataTable({
          "ajax": {
              'url':  ajaxurl, 
              'data' : function(d) {
                          d.aq = 'articleviews';
                          d.action = 'hkba_dynamic_stats';
                          d.begin = beginDateStamp,
                          d.end = endDateStamp,
                          d.nonce = getSecurity('.article-views-result')
                        } 
          }, 
          "order": [[ 1, "desc" ]],
          responsive: true
        });
        */

        recentFeedbackTable = $('table.recent-feedback-result').DataTable({
          "ajax": {
              'url':  ajaxurl, 
              'data' : function(d) {
                          d.aq = 'recentfeedback';
                          d.action = 'hkba_dynamic_stats';
                          d.begin = beginDateStamp,
                          d.end = endDateStamp,
                          d.nonce = getSecurity('.recent-feedback-result')
                        } 
          }, 
          "order": [[ 1, "desc" ]],
          responsive: true
        });

        nullSearchesTable = $('table.null-searches-result').DataTable({
          "ajax": {
              'url':  ajaxurl, 
              'data' : function(d) {
                          d.aq = 'nullsearches';
                          d.action = 'hkba_dynamic_stats';
                          d.begin = beginDateStamp,
                          d.end = endDateStamp,
                          d.nonce = getSecurity('.null-searches-result')
                        } 
          }, 
          "order": [[ 1, "desc" ]],
          "searching": false,
          "lengthChange": false,
          "pageLength": 10,
          "columnDefs": [ { "targets": 0, "orderable": false } ],
          responsive: true
        });

        topSearchesTable = $('table.top-searches-result').DataTable({
          "ajax": {
              'url':  ajaxurl, 
              'data' : function(d) {
                          d.aq = 'topsearches';
                          d.action = 'hkba_dynamic_stats';
                          d.begin = beginDateStamp,
                          d.end = endDateStamp,
                           d.nonce = getSecurity('.top-searches-result')
                        } 
          }, 
          "order": [[ 1, "desc" ]],
          "searching": false,
          "lengthChange": false,
          "pageLength": 10,
          "columnDefs": [ { "targets": 0, "orderable": false } ],
          responsive: true
        });

        /*
        authorStatsTable = $('table.author-rankings-result').DataTable({
          "ajax": {
              'url':  ajaxurl, 
              'data' : function(d) {
                          d.aq = 'authorstats';
                          d.action = 'hkba_dynamic_stats';
                          d.begin = beginDateStamp,
                          d.end = endDateStamp,
                           d.nonce = getSecurity('.author-rankings-result')
                        } 
          }, 
          "order": [[ 1, "desc" ]],
          responsive: true
        });
      */

      exitsFromCategoriesTable = $('table.category-exits-result').DataTable({
          "ajax": {
              'url':  ajaxurl, 
              'data' : function(d) {
                          d.aq = 'exitsfromcats';
                          d.action = 'hkba_dynamic_stats';
                          d.begin = beginDateStamp,
                          d.end = endDateStamp,
                          d.nonce = getSecurity('.category-exits-result')
                        } 
          }, 
          "order": [[ 1, "desc" ]],
          "searching": false,
          "lengthChange": false,
          "pageLength": 10,
          "columnDefs": [ { "targets": 0, "orderable": false } ],
          responsive: true
        });

      exitsFromArticlesTable = $('table.article-exits-result').DataTable({
          "ajax": {
              'url':  ajaxurl, 
              'data' : function(d) {
                          d.aq = 'exitsfromarticles';
                          d.action = 'hkba_dynamic_stats';
                          d.begin = beginDateStamp,
                          d.end = endDateStamp,
                          d.nonce = getSecurity('.article-exits-result')
                        } 
          }, 
          "order": [[ 1, "desc" ]],
          "searching": false,
          "lengthChange": false,
          "pageLength": 10,
          "columnDefs": [ { "targets": 0, "orderable": false } ],
          responsive: true
        });

      
      //initial load
      updateAllStats();     

    });

})(jQuery);