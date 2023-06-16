import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

// Mendaftarkan fungsi-fungsi untuk pemilihan kurir dan pembayaran
function registerCourierSelection() {
    const courierButtons = document.querySelectorAll('[data-name="courier"]');
    courierButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Menghapus kelas aktif dari semua tombol kurir
            courierButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Menambahkan kelas aktif pada tombol kurir yang dipilih
            button.classList.add('active');

            // Memanggil fungsi untuk memperbarui tampilan pembayaran
            updatePaymentSelection();
        });
    });
}

function registerPaymentSelection() {
    const paymentButtons = document.querySelectorAll('[data-name="payment"]');
    paymentButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Menghapus kelas aktif dari semua tombol pembayaran
            paymentButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Menambahkan kelas aktif pada tombol pembayaran yang dipilih
            button.classList.add('active');
        });
    });
}

function updatePaymentSelection() 
    {
    const courierButtons = document.querySelectorAll('[data-name="courier"]');
    const paymentButtons = document.querySelectorAll('[data-name="payment"]');
    const selectedCourier = document.querySelector('[data-name="courier"].active');

    if (selectedCourier) {
        // Mengaktifkan semua tombol pembayaran
        paymentButtons.forEach(button => 
        {
            button.disabled = false;
        });
    } else {
        // Menonaktifkan semua tombol pembayaran jika tidak ada kurir yang dipilih
        paymentButtons.forEach(button => {
            button.disabled = true;
            button.classList.remove('active');
        });
    }
}

// Memanggil fungsi-fungsi pendaftaran pemilihan
registerCourierSelection();
registerPaymentSelection();
