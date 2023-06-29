! function(o) {
    "use strict";

    function a() {}
    a.prototype.init = function() {
        o(".peity-line").each(function() {
            o(this).peity("line", o(this).data())
        }), o(".knob").knob(), c3.generate({
            bindto: "#combine-chart",
            data: {
                columns: [
                   
                    ["NTU", 200, 200, 90, 240, 130, 220],
                    // ["On Trial", 300, 130, 160, 400, 250, 250],
                    ["lapsed", 200, 130, 90, 240, 130, 220],
                    ["Active", 130, 80, 110, 140, 160, 50],
                    ["Not Defined", 140, 130, 160, 150, 170, 160],
                    ["Cancelled", 110, 100, 130, 120, 130, 120],
                    ["Deceased", 20, 170, 80, 190, 100, 200],
                    
                ],
                types: {
                    
                    On_Trial: "bar",
                    NTU: "dot",
                    Deceased: "bar",
                    Active: "bar"
                    
                },
                colors: {
                   
                    On_Trial: "#4ac18e",
                    NTU: "#4ac18e",
                    Deceased: "#ea553d",
                    Active: "#6d60b0",
                    // Cancelled:"#ebc77f"
                },
                groups: [
                    ["SonyVaio", "iMacs"]
                ]
            },
            axis: {
                x: {
                    type: "categorized"
                }
            }
        }), c3.generate({
            bindto: "#donut-chart",
            data: {
                columns: [
                    ["NTU", 78],
                    ["Deceased", 40],
                    ["Active", 25],
                    ["On-Trial", 25]
                    
                ],
                type: "donut"
            },
            donut: {
                title: "Total Policies",
                width: 45,
                label: {
                    show: !1
                }
            },
            color: {
                pattern: ["#4ac18e", "#ea553d", "#6d60b0" , "#83ed09"]
            }
        })
    }, o.Dashboard = new a, o.Dashboard.Constructor = a
}(window.jQuery),
function() {
    "use strict";
    window.jQuery.Dashboard.init()
}();