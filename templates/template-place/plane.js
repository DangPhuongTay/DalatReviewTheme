
function toggleDropdown() {
    var dropdownContent = document.querySelector('.flight-dropdown-content');

    if (!dropdownContent) {
        console.error('Dropdown content element not found');
        return;
    }

    if (dropdownContent.style.display === "none" || dropdownContent.style.display === "") {
        dropdownContent.style.display = "block";
    } else {
        dropdownContent.style.display = "none";
    }
}

$(document).ready(function() {
    var provinces = [
        "Hà Nội", "TP. Hồ Chí Minh", "Đà Nẵng", "Đà Lạt", "Phú Quốc",
        "TP. Vinh", "Hải Phòng", "Cần Thơ"
    ];

    function showProvinces(input, otherInput) {
        var $dropdown = $("<div>", {
            class: "province-dropdown shadow"
        }).insertAfter(input.closest('.plane-place-input'));

        provinces.forEach(function(province) {
            if (province !== otherInput.val()) {
                $("<div>", {
                    class: "province-item",
                    text: province
                }).appendTo($dropdown).on("click", function() {
                    input.val(province);
                    $dropdown.remove();
                    otherInput.closest('.plane-place-input').find('.province-dropdown').remove(); // Remove any existing dropdown from the other input
                });
            }
        });

        $(document).on("click", function(e) {
            if (!$(e.target).closest(input.closest('.plane-place-input')).length && 
                !$(e.target).closest(".province-dropdown").length) {
                $dropdown.remove();
            }
        });
    }

    var $departure = $('#departure');
    var $destination = $('#destination');

    $departure.on('click', function() {
        showProvinces($departure, $destination);
    });

    $destination.on('click', function() {
        showProvinces($destination, $departure);
    });

    $("#date").datepicker({
        showButtonPanel: true,
        numberOfMonths: 2,
        closeText: "Hoàn thành",
        beforeShow: function(input, inst) {
            var datepicker = $('#datepicker-container');
            var parentContainer = $('.plane-date-input');
            datepicker.append($('#ui-datepicker-div'));
            datepicker.show();
            parentContainer.append(datepicker);
        },
        onClose: function() {
            $('#datepicker-container').hide();
        }
    });
});

// script options airplane 

document.addEventListener('DOMContentLoaded', function() {
        const selected = document.querySelector('.plane-airline-select');
        const optionsContainer = document.querySelector('.plane-options');
        const optionsList = document.querySelectorAll('.plane-option');
    
        selected.addEventListener('click', () => {
            optionsContainer.classList.toggle('show');
        });
    
        optionsList.forEach(option => {
            option.addEventListener('click', () => {
                selected.innerHTML = option.innerHTML;
                optionsContainer.classList.remove('show');
            });
        });
    
        document.addEventListener('click', (event) => {
            if (!event.target.closest('.plane-search-form-airline')) {
                optionsContainer.classList.remove('show');
            }
        });
    });