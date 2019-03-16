jQuery("#simulation")
  .on("click", ".s-da8e4571-2eb0-4e83-96ef-e7442c584f7c .click", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Image_2")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimNavigation",
                  "parameter": {
                    "isbackward": true
                  },
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("mouseup", ".s-da8e4571-2eb0-4e83-96ef-e7442c584f7c .mouseup", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Rectangle_5")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5 span": {
                      "attributes": {
                        "color": "#333333",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                },
                {
                  "action": "jimShow",
                  "parameter": {
                    "target": [ "#s-content_3" ]
                  },
                  "exectype": "parallel",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Rectangle_4")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4 span": {
                      "attributes": {
                        "color": "#333333",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                },
                {
                  "action": "jimShow",
                  "parameter": {
                    "target": [ "#s-content_2" ]
                  },
                  "exectype": "parallel",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Rectangle_6")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6 span": {
                      "attributes": {
                        "color": "#333333",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                },
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Image_17 > svg": {
                      "attributes": {
                        "overlay": "none"
                      }
                    }
                  } ],
                  "exectype": "parallel",
                  "delay": 0
                },
                {
                  "action": "jimShow",
                  "parameter": {
                    "target": [ "#s-content_1" ]
                  },
                  "exectype": "parallel",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("mousedown", ".s-da8e4571-2eb0-4e83-96ef-e7442c584f7c .mousedown", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getEventFirer();
    if(jFirer.is("#s-Rectangle_5")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5 span": {
                      "attributes": {
                        "color": "#2B2B2B",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Rectangle_4")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4 span": {
                      "attributes": {
                        "color": "#2B2B2B",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Rectangle_6")) {
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6 span": {
                      "attributes": {
                        "color": "#2B2B2B",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                },
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Image_17 > svg": {
                      "attributes": {
                        "overlay": "#2B2B2B"
                      }
                    }
                  } ],
                  "exectype": "parallel",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      event.data = data;
      jEvent.launchCases(cases);
    }
  })
  .on("mouseenter dragenter", ".s-da8e4571-2eb0-4e83-96ef-e7442c584f7c .mouseenter", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Rectangle_5") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_5 span": {
                      "attributes": {
                        "color": "#959A9D",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Rectangle_4") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_4 span": {
                      "attributes": {
                        "color": "#959A9D",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    } else if(jFirer.is("#s-Rectangle_6") && jFirer.has(event.relatedTarget).length === 0) {
      event.backupState = true;
      event.target = jFirer;
      cases = [
        {
          "blocks": [
            {
              "actions": [
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6": {
                      "attributes": {
                        "line-height": "19px",
                        "font-size": "10.0pt",
                        "font-family": "'Comic Sans MS',Arial"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6 .valign": {
                      "attributes": {
                        "vertical-align": "middle",
                        "text-align": "left"
                      }
                    }
                  },{
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Rectangle_6 span": {
                      "attributes": {
                        "color": "#959A9D",
                        "text-align": "left",
                        "text-decoration": "none",
                        "font-family": "'Comic Sans MS',Arial",
                        "font-size": "10.0pt",
                        "font-style": "normal",
                        "font-weight": "700"
                      }
                    }
                  } ],
                  "exectype": "serial",
                  "delay": 0
                },
                {
                  "action": "jimChangeStyle",
                  "parameter": [ {
                    "#s-da8e4571-2eb0-4e83-96ef-e7442c584f7c #s-Image_17 > svg": {
                      "attributes": {
                        "overlay": "#959A9D"
                      }
                    }
                  } ],
                  "exectype": "parallel",
                  "delay": 0
                }
              ]
            }
          ],
          "exectype": "serial",
          "delay": 0
        }
      ];
      jEvent.launchCases(cases);
    }
  })
  .on("mouseleave dragleave", ".s-da8e4571-2eb0-4e83-96ef-e7442c584f7c .mouseleave", function(event, data) {
    var jEvent, jFirer, cases;
    if(data === undefined) { data = event; }
    jEvent = jimEvent(event);
    jFirer = jEvent.getDirectEventFirer(this);
    if(jFirer.is("#s-Rectangle_5")) {
      jEvent.undoCases(jFirer);
    } else if(jFirer.is("#s-Rectangle_4")) {
      jEvent.undoCases(jFirer);
    } else if(jFirer.is("#s-Rectangle_6")) {
      jEvent.undoCases(jFirer);
    }
  });