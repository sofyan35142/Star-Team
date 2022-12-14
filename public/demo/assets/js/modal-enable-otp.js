"use strict";
document.addEventListener("DOMContentLoaded", (function(e) {
	! function() {
		const e = document.querySelector(".phone-number-otp-mask");
		e && new Cleave(e, {
			phone: !0,
			phoneRegionCode: "US"
		}), FormValidation.formValidation(document.getElementById("enableOTPForm"), {
			fields: {
				nama_produk: {
					validators: {
						notEmpty: {
							message:"Nama harus di isi"
						}
					}
				},
				stock: {
					validators: {
						notEmpty: {
							message:"Stock harus di isi"
						}
					}
				},
				harga: {
					validators: {
						notEmpty: {
							message:"Harga harus di isi"
						}
					}
				},
				foto_produk: {
					validators: {
						notEmpty: {
							message:"Masukkan foto"
						}
					}
				}
			},
			plugins: {
				trigger: new FormValidation.plugins.Trigger,
				bootstrap5: new FormValidation.plugins.Bootstrap5({
					eleValidClass: "",
					rowSelector: ".col-12"
				}),
				submitButton: new FormValidation.plugins.SubmitButton,
				autoFocus: new FormValidation.plugins.AutoFocus
			},
			init: e => {
				e.on("plugins.message.placed", (function(e) {
					e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
				}))
			}
		})
	}()
}));
