@push('css')
<style>
.pdf-container {
    box-shadow: inset 0 0 10px rgba(0,0,0,0.1);
}

.modal-content {
    animation: fadeInUp 0.4s ease;
}

@keyframes fadeInUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}
</style>
@endpush


<!-- PDF Modal -->
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-md-down modal-xl modal-dialog-centered">
        <div class="modal-content shadow-lg border-0 rounded-4 overflow-hidden">
            <!-- Header -->
            <div class="modal-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="modal-title fw-semibold" id="pdfModalLabel">
                    <i class="bi bi-file-earmark-person me-2"></i> My Resume (Adib Farhan)
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <div class="modal-body p-0 bg-light">
                <div class="pdf-container" style="position: relative; height: 85vh; background: #f8f9fa;">
                    <iframe
                        src="https://adibfarhan.vercel.app/assets/files/Adib_Farhan_2025_CV.pdf"
                        style="width: 100%; height: 100%; border: none; border-radius: 0 0 10px 10px;"
                        title="Adib Farhan CV"
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Footer -->
            <div class="modal-footer bg-white d-flex justify-content-between align-items-center">
                <small class="text-muted">© {{ date('Y') }} Muhammad Adib Farhan — Resume Viewer</small>
                <a href="{{ asset('assets/files/Adib_Farhan_2025_CV.pdf') }}" target="_blank" class="btn btn-outline-primary">
                    <i class="bi bi-box-arrow-up-right me-2"></i> Open in New Tab
                </a>
            </div>
        </div>
    </div>
</div>
