$("input[type=checkbox]").click(function() {
    if($('#administracion_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("administración")) {
                if($('#contaduria_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("contaduría")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#informatica_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("informática")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#contaduria_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("contaduría")) {
                if($('#administracion_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("administración")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#informatica_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("informática")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#informatica_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("informática")) {
                if($('#administracion_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("administración")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#contaduria_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("contaduría")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#lunes_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("lunes")) {
                if($('#martes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("martes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#miercoles_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("miércoles")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#jueves_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("jueves")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#viernes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("viernes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#martes_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("martes")) {
                if($('#lunes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("lunes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#miercoles_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("miércoles")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#jueves_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("jueves")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#viernes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("viernes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#miercoles_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("miércoles")) {
                if($('#martes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("martes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#lunes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("lunes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#jueves_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("jueves")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#viernes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("viernes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#jueves_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('jueves')) {
                if($('#martes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("martes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#miercoles_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("miércoles")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#lunes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("lunes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#viernes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("viernes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#viernes_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("viernes")) {
                if($('#martes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("martes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#miercoles_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("miércoles")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#jueves_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("jueves")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#lunes_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes("lunes")) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#3o_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('semestre="3o')) {
                if($('#5o_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('semestre="5o')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7o_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('semestre="7o')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#5o_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('semestre="5o')) {
                if($('#3o_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('semestre="3o')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7o_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('semestre="7o')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#7o_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('semestre="7o')) {
                if($('#5o_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('semestre="5o')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#3o_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('semestre="3o')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#fca_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if(!$(this).html().includes("emp")) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#emp_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("emp")) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#prof_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("profesionalizante")) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#comp_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes("complementaria")) {
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#7_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('horario="07')) {
                if($('#9_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="09')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#11_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="11')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="07')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#17_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="17')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#18_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="18')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#20_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="20')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#9_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('horario="09')) {
                if($('#7_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="07')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#11_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="11')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#16_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="16')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#17_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="17')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#18_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="18')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#20_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="20')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#11_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('horario="11')) {
                if($('#9_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="09')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="07')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#16_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="16')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#17_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="17')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#18_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="18')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#20_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="20')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#16_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('horario="16')) {
                if($('#9_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="09')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#11_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="11')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="07')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#17_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="17')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#18_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="18')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#20_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="20')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#17_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('horario="17')) {
                if($('#9_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="09')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#11_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="11')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#16_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="16')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="07')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#18_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="18')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#20_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="20')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#18_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('horario="18')) {
                if($('#9_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="09')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#11_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="11')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#16_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="16')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#17_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="17')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="07')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#20_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="20')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
    if($('#20_checkbox').is(':checked')) {
        var count = 0;
        $(".row a").each(function(){
            if($(this).html().includes('horario="20')) {
                if($('#9_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="09')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#11_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="11')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#16_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="16')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#17_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="17')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#18_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="18')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                if($('#7_checkbox').is(':checked')) {
                    var count = 0;
                    $(".row a").each(function(){
                        if($(this).html().includes('horario="07')) {
                            $(this).fadeIn();
                        } else {
                            count++;
                        }
                    });
                }
                $(this).fadeIn();
            } else {
                $(this).fadeOut();
                count++;
            }
        });
    }
});
