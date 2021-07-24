

$(document).ready(function() {

    const diagram_1 = () => {
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"SegoeUI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var PTI = document.getElementById("PTI").value;
        var SI = document.getElementById("SI").value;
        var MI = document.getElementById("MI").value;
        var Ilkom = document.getElementById("Ilkom").value;
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["PTI", "SI", "MI", "Ilkom"],
                datasets: [{
                    data: [PTI, SI, MI, Ilkom],
                    backgroundColor: ['#7c4fe0', '#28a745', '#17a2b8','#ffc107'],
                    hoverBackgroundColor: ['#7c4fe0', '#28a745', '#17a2b8','#ffc107'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });
    }


    const diagram_2 = () => {
         Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"SegoeUI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById("myAngkatanChart");
        let kr_2 = document.getElementById("thn_2018").value;
        let kr_1 = document.getElementById("thn_2019").value;
        let sk = document.getElementById("thn_2020").value;
        let tahun = new Date().getFullYear();
        let kurang_1 = tahun - 1;
        let kurang_2 = tahun - 2;
        var myAngkatanChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [kurang_2, kurang_1, tahun],
                datasets: [{
                    data: [kr_2, kr_1, sk],
                    backgroundColor: ['#7c4fe0', '#28a745', '#17a2b8'],
                    hoverBackgroundColor: ['#7c4fe0', '#28a745', '#17a2b8'],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: false
                },
                cutoutPercentage: 80,
            },
        });
    }

    const sendAjax = () => {
            const data = new FormData()
            let value = document.getElementById('nama_kegiatan').value;
            data.append("id_kegiatan", value);
            data.append('id_send', '1');
            if (value != "") {
                fetch(baseURL + "eors/ajax_data", {
                    method: "POST",
                    body: data,
                })
                .then(response => response.text())
                .then(data => {
                    if (data != "") {
                        document.getElementById("live").innerHTML = data;
                        // Set new default font family and font color to mimic Bootstrap's default styling
                        diagram_1();
                        diagram_2();
                    } else {
                        console.log(data);
                        console.error("Can't Get Ajax Data");
                        

                    }
                });
            }
    }

    const sendAjaxGuest = () => {
            const data = new FormData()
            let value = document.getElementById('nama_kegiatan').value;
            data.append("id_kegiatan", value);
            data.append('id_send', '2');
            if (value != "") {
                fetch(baseURL + "eors/ajax_data", {
                    method: "POST",
                    body: data,
                })
                .then(response => response.text())
                .then(data => {
                    if (data != "") {
                        document.getElementById("accordion4").innerHTML = data;
                        // Set new default font family and font color to mimic Bootstrap's default styling
                        diagram_1();
                        diagram_2();
                    } else {
                        console.log(data);
                        console.error("Can't Get Ajax Data");
                    }
            });
        }
    }
    if (document.getElementById('live') != null) {
        sendAjax();
        setInterval(() => {
            sendAjax();
        }, 5000);
    }
    if (document.getElementById('accordion4') != null) {
        sendAjaxGuest()
        setInterval(() => {
            sendAjaxGuest();
        }, 5000);
    }


});
