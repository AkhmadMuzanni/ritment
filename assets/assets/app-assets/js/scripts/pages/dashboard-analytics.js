/*=========================================================================================
    File Name: dashboard-analytics.js
    Description: intialize advance cards
    ----------------------------------------------------------------------------------------
    Item Name: Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit
    Version: 1.0
    Author: ThemeSelection
    
    ==========================================================================================*/
    $(window).on('load', function () {


    
        /*************************************************
       *               Analytics donut               *
       *************************************************/
    
        var analyticsDonutChart = new Chartist.Pie('#Analytics-donut-chart', {
            series: [100],
            labels: ['iOS']
        }, {
                donut: true,
                labelInterpolationFnc: function (value) {
                    return '\ue9c9';
                },
                donutSolid: true,
                total: 100,
                donutWidth: 5,
            });
    
        analyticsDonutChart.on('draw', function (data) {
            if (data.type === 'label') {
                if (data.index === 0) {
                    data.element.attr({
                        dx: data.element.root().width() / 2,
                        dy: (data.element.root().height() + (data.element.height() / 4)) / 2,
                        class: 'ct-label',
                        'font-family': 'feather'
                    });
                } else {
                    data.element.remove();
                }
            }
        });
    
        // For the sake of the example we update the chart every time it's created with a delay of 8 seconds
        analyticsDonutChart.on('created', function (data) {
            var defs = data.svg.querySelector('defs') || data.svg.elem('defs');
            defs.elem('linearGradient', {
                id: 'donutGradient1',
                x1: 0,
                y1: 1,
                x2: 0,
                y2: 0
            }).elem('stop', {
                offset: '0%',
                'stop-color': 'rgba(250,203,205,1)'
            }).parent().elem('stop', {
                offset: '95%',
                'stop-color': 'rgba(250,203,205, 0.7)'
            });
            return defs;
    
    
        });
    
    
        
    
        
    
             /*************************************************
           *               New Projects               *
           *************************************************/
    
        var newProjects = new Chartist.Line('#new-projects', {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            series: [
                [90, 325, 225, 600, 200],
                [590, 90, 300, 150, 500]
            ]
        }, {
                low: 0,
                fullWidth: true,
                onlyInteger: true,
                axisY: {
                    low: 0,
                    scaleMinSpace: 50,
                },
                axisX: {
                    showGrid: false
                },
                chartPadding: {
                    right: 25
                },
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 2
                }),
                plugins: [
                    Chartist.plugins.tooltip({
                        appendToBody: true,
                        pointClass: 'ct-point-circle'
                    })
                ]
    
            });
            newProjects.on('created', function (data) {
            var defs = data.svg.querySelector('defs') || data.svg.elem('defs');
            defs.elem('linearGradient', {
                id: 'linear6',
                x1: 0,
                y1: 1,
                x2: 0,
                y2: 0
            }).elem('stop', {
                offset: 0,
                'stop-color': 'rgba(45,121,255,0.7)'
            }).parent().elem('stop', {
                offset: 1,
                'stop-color': 'rgba(249,81,255, 0.7)'
            });
    
            defs.elem('linearGradient', {
                id: 'linear7',
                x1: 0,
                y1: 1,
                x2: 1,
                y2: 0
            }).elem('stop', {
                offset: 0,
                'stop-color': 'rgba(247,214,142,1)'
            }).parent().elem('stop', {
                offset: 1,
                'stop-color': 'rgba(248,120,131, 1)'
            });
    
            return defs;
    
    
        }).on('draw', function (data) {
            var circleRadius = 10;
            if (data.type === 'point') {
                var circle = new Chartist.Svg('circle', {
                    cx: data.x,
                    cy: data.y,
                    'ct:value': data.y,
                    r: circleRadius,
                    class: data.value.y === 600 ? 'ct-point-circle' : 'ct-point-circle-transperent'
                });
                data.element.replace(circle);
            }
            if (data.type === 'line') {
                data.element.animate({
                    d: {
                        begin: 1000,
                        dur: 1000,
                        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                        to: data.path.clone().stringify(),
                        easing: Chartist.Svg.Easing.easeOutQuint
                    }
                });
            }
        });
    
        // Chat scrollbar
        if($('.chats').length > 0){
            $('.chats').perfectScrollbar({
                theme:"dark"
            });
        }
    
    });