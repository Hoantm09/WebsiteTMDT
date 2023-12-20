const ApiTransport = {
   Transport: {},
    config: {
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
        },
        crossDomain: true,
    },
};
(() => {
    ApiTransport.Transport.getDoiSoat = (id) => $.ajax({
        url: `/admin/transport/get-doi-soat/${id}`,
        method: 'GET',
        headers: ApiTransport.config.headers,
/*         data: JSON.stringify({
        }), */
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error(error);
        }
    });

    ApiTransport.Transport.getTicketDetail = (url) =>$.ajax({
        url: url,
        method: 'GET',
        headers: ApiTransport.config.headers,
/*         data: JSON.stringify({
        }), */
        success: function(response) {
            console.log(response);
        },
        error: function(error) {
            console.error(error);
        }
    });
    
})();

/* const View = {
    doiSoat: {
        activeClick() {
            document.addEventListener('DOMContentLoaded', function () {
                // Get all elements with class 'status-event'
                var statusEvents = document.querySelectorAll('.status-event');

                // Add click event listener to each status event
                statusEvents.forEach(function (event) {
                    event.addEventListener('click', function () {
                        // Remove 'is-select' class from all status events
                        statusEvents.forEach(function (el) {
                            el.classList.remove('is-select');
                        });

                        // Add 'is-select' class to the clicked status event
                        event.classList.add('is-select');
                        var dataId = event.getAttribute('data-id');
                        console.log('Selected data-id:', dataId);
                        ApiTransport.Transport.getDoiSoat(dataId)
                            .done(res=>{
                                if (res.length) console.log('Looxi roi')
                                var tableBody = document.querySelector('.table tbody');
            
                                // Clear existing rows from the table
                                tableBody.innerHTML = '';
                    
                                // Iterate through the received data and append rows to the table
                                res.forEach(function (item) {
                                    var row = `<tr role="row" class="even">
                                    <td>${item.vandonID}</td>
                                    <td>${item.orderID}</td>
                                    <td>
                                        <div class="metadata-table-wrapper">
                                            <span class="badge badge-pill badge-blue m-r-10">${item.customerID}</span>
                                        </div>
                                        <div class="metadata-table-wrapper">
                                            <span class="badge badge-pill badge-green m-r-10">0866888222</span>
                                        </div>
                                    </td>
                                    <td>${item.partner}</td>
                                    <td>                                                
                                        <div class="metadata-table-wrapper">
                                            <span class="badge badge-pill badge-green m-r-10">Phí trả ĐVVC: ${item.fee}</span>
                                        </div>
                                        <div class="metadata-table-wrapper">
                                            <span class="badge badge-pill badge-red m-r-10">Thu hộ COD: ${item.COD}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            ${item.status === 1
                                                ? `<div class="badge badge-success badge-dot m-r-10"></div> <div>Đã đối soát</div>`
                                                : `<div class="badge badge-danger badge-dot m-r-10"></div> <div>Chưa đối soát</div>`
                                            }
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                            <a class="view-data-2" status-data="${item.id}" style="cursor: pointer" href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
                                            <i class="anticon anticon-eye"></i>
                                            </a>
                                        </button>                                         
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                        <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                    </td>
                                    <!-- Add other columns as needed -->
                                </tr>`;
                                    tableBody.innerHTML += row;
                                });
                                
                            })
                            .fail(err=>{
                                console.log("Có lỗi")
                            })
                            .always(()=>{

                            })
                    });
                });
            });
        },
        setStatus() {
            var viewDataElements = document.querySelectorAll('.view-data-2');

            // Use forEach to iterate through the NodeList
            viewDataElements.forEach(function (element) {
                // Add a click event listener to each 'view-data-2' element
                element.addEventListener('click', function () {
                    // Lấy ra status-id của button được bấm
                    var statusId = element.getAttribute('status-data');
                    console.log('Clicked on button with status-id:', statusId);

                    // Perform additional actions if needed
                });
            });

        }
        
    },

};

(() => {
    View.doiSoat.activeClick();

    // Introduce a delay of 2000 milliseconds (2 seconds) before calling setStatus
    setTimeout(function () {
        View.doiSoat.setStatus();
    }, 2000);
})(); */

const View = {
    doiSoat: {
        activeClick() {
            document.addEventListener('DOMContentLoaded', function () {
                var statusEvents = document.querySelectorAll('.status-event');

                statusEvents.forEach(function (event) {
                    event.addEventListener('click', function () {
                        statusEvents.forEach(function (el) {
                            el.classList.remove('is-select');
                        });

                        event.classList.add('is-select');
                        var dataId = event.getAttribute('data-id');
                        console.log('Selected data-id:', dataId);
                        ApiTransport.Transport.getDoiSoat(dataId)
                        
                            .done(res => {
                                if (res.length) console.log('Looxi roi')
                                var tableBody = document.querySelector('.table tbody');

                                tableBody.innerHTML = '';

                                res.forEach(function (item) {
                                    var row = `
                                    <tr role="row" class="even">
                                        <td>${item.vandonID}</td>
                                        <td>${item.orderID}</td>
                                        <td>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-blue m-r-10">${item.customerID}</span>
                                            </div>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-green m-r-10">0866888222</span>
                                            </div>
                                        </td>
                                        <td>${item.partner}</td>
                                        <td>                                                
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-green m-r-10">Phí trả ĐVVC: ${item.fee}</span>
                                            </div>
                                            <div class="metadata-table-wrapper">
                                                <span class="badge badge-pill badge-red m-r-10">Thu hộ COD: ${item.COD}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                ${item.status === 1
                                                    ? `<div class="badge badge-success badge-dot m-r-10"></div> <div>Đã đối soát</div>`
                                                    : `<div class="badge badge-danger badge-dot m-r-10"></div> <div>Chưa đối soát</div>`
                                                }
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <a class="view-data-2" ticket-id="${item.id}}" style="cursor: pointer" href="#" data-toggle="modal" data-target=".bd-example-modal-xl">
                                                <i class="anticon anticon-eye"></i>
                                                </a>
                                            </button>                                         
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                <i class="anticon anticon-edit"></i>
                                            </button>
                                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                <i class="anticon anticon-delete"></i>
                                            </button>
                                        </td>
                                        <!-- Add other columns as needed -->
                                    </tr>`;
                                    tableBody.innerHTML += row;
                                });

                                // Dispatch a custom event to signal that activeClick has completed
                                document.dispatchEvent(new Event('activeClickCompleted'));
                            })
                            .fail(err => {
                                console.log("Có lỗi");
                                // Dispatch the event even if there's an error
                                document.dispatchEvent(new Event('activeClickCompleted'));
                            })
                            .always(() => {

                            })
                    });
                });
            });
        },
        setStatus() {
            return new Promise(resolve => {
                document.addEventListener('activeClickCompleted', function () {
                    var viewDataElements = document.querySelectorAll('.view-data-2');
                    
                    viewDataElements.forEach(element => {
                        element.addEventListener('click', function () {
                            console.log("click");
                            var ticketID = element.getAttribute('ticket-id');
                            console.log('Clicked on button with ticket-id:', ticketID);
                            
                            // Resolve the Promise and pass ticketID
                            resolve(ticketID);
                        });
                    });
                });
            });
        },
        
        showDetail(id) {
            console.log(id);
            var url = '/admin/transport/get-ticket-detail/'+id
            ApiTransport.Transport.getTicketDetail(url)
                .done(res=>{
                    document.getElementById("partner").innerHTML=res.partner;
                    document.getElementById("id").innerHTML=res.id;
                    document.getElementById("vdID").innerHTML=res.vandonID;
                    document.getElementById("odID").innerHTML=res.orderID;
                    document.getElementById("COD_detail").innerHTML=res.COD;
                    document.getElementById("fee_detail").innerHTML=res.fee;

                })
                .fail(err=>{
                    console.log("err")
                })
        }
    },
};

(() => {
    View.doiSoat.activeClick();
    
    View.doiSoat.setStatus().then(ticketID => {
        View.doiSoat.showDetail(ticketID);
    });
})();
 
