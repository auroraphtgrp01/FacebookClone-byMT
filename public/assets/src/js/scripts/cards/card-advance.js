
'use strict';

$(window).on('load', function () {
    var $trackBgColor = '#e9ecef';

    var employeePrimaryChartOptions1;
    var employeeDangerChartOptions;
    var employeeSuccessChartOptions;
    var employeeSecondaryChartOptions;
    var employeeWarningChartOptions;
    var employeePrimaryChartOptions2;

    var employeePrimaryChart1;
    var employeeDangerChart;
    var employeeSuccessChart;
    var employeeSecondaryChart;
    var employeeWarningChart;
    var employeePrimaryChart2;

    var $employeeChartPrimary1 = document.querySelector('.employee-task-chart-primary-1');
    var $employeeChartDanger = document.querySelector('.employee-task-chart-danger');
    var $employeeChartSuccess = document.querySelector('.employee-task-chart-success');
    var $employeeChartSecondary = document.querySelector('.employee-task-chart-secondary');
    var $employeeChartWarning = document.querySelector('.employee-task-chart-warning');
    var $employeeChartPrimary2 = document.querySelector('.employee-task-chart-primary-2');

    var statePrimaryChartOptions;
    var stateWarningChartOptions;
    var stateSecondaryChartOptions;
    var stateInfoChartOptions;
    var stateDangerChartOptions;

    var statePrimaryChart;
    var stateDangerChart;
    var stateInfoChart;
    var stateSecondaryChart;
    var stateWarningChart;

    var $stateChartPrimary = document.querySelector('.state-chart-primary');
    var $stateChartWarning = document.querySelector('.state-chart-warning');
    var $stateChartSecondary = document.querySelector('.state-chart-secondary');
    var $stateChartInfo = document.querySelector('.state-chart-info');
    var $stateChartDanger = document.querySelector('.state-chart-danger');
    var userChats = $('.user-chats');

    // init ps if it is not touch device
    if (!$.app.menu.is_touch_device()) {
        // Chat area
        if (userChats.length > 0) {
            var chatsUser = new PerfectScrollbar(userChats[0], {
                wheelPropagation: false
            });
        }
    } else {
        userChats.css('overflow', 'scroll');
    }

    //------------ Employee Task Charts ------------
    //----------------------------------------------

    // Employee Primary Chart 1
    employeePrimaryChartOptions1 = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.primary],
        series: [45],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };

    // Employee Danger Chart
    employeeDangerChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.danger],
        series: [65],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    // Employee Success Chart
    employeeSuccessChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.success],
        series: [60],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    // Employee Secondary Chart
    employeeSecondaryChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.secondary],
        series: [35],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    // Employee Warning Chart
    employeeWarningChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.warning],
        series: [65],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    // Employee Primary Chart 2
    employeePrimaryChartOptions2 = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.primary],
        series: [80],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    //---------------- State Charts ----------------
    //----------------------------------------------

    // State Primary Chart
    statePrimaryChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.primary],
        series: [54.4],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    // State Warning Chart
    stateWarningChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.warning],
        series: [6.1],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    // State Secondary Chart 1
    stateSecondaryChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.secondary],
        series: [14.6],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };


    // State Info Chart
    stateInfoChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.info],
        series: [4.2],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };
    stateInfoChart = new ($stateChartInfo, stateInfoChartOptions);


    // State Danger Chart
    stateDangerChartOptions = {
        chart: {
            height: 30,
            width: 30,
            type: 'radialBar'
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -12,
                bottom: -15
            }
        },
        colors: [window.colors.solid.danger],
        series: [8.4],
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '22%'
                },
                track: {
                    background: $trackBgColor
                },
                dataLabels: {
                    showOn: 'always',
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            }
        },
        stroke: {
            lineCap: 'round'
        }
    };

});

// Add message to chat - function call on form submit
function enterChat(source) {
    var message = $('.message').val();
    if (/\S/.test(message)) {
        var html = '<div class="chat-content">' + '<p>' + message + '</p>' + '</div>';
        $('.chat:last-child .chat-body').append(html);
        $('.message').val('');
        $('.user-chats').scrollTop($('.user-chats > .chats').height());
    }
}
