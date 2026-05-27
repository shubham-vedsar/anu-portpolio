<?php
$page_title = "Private Schedule Verification & Directions";
$current_page = 'contact';
include 'includes/header.php';
?>

<section class="py-24 bg-slate-50 border-b border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- High-End Form Card Layout Container -->
        <div class="bg-white rounded-sm shadow-2xl p-8 sm:p-14 border-t-4 border-law-gold">
            <div class="text-center mb-12">
                <h1 class="font-serif text-3xl sm:text-4xl font-bold text-law-navy mb-3">Chamber Scheduling & Contact</h1>
                <p class="text-slate-500 text-sm max-w-lg mx-auto leading-relaxed">
                    Provide the requested informational metrics below to schedule a formal, strictly confidential review of your case with senior counsel.
                </p>
            </div>
            
            <form action="#" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-xs font-bold tracking-widest text-law-navy uppercase mb-2">Litigant Full Name *</label>
                        <input type="text" required class="w-full bg-slate-50 border border-slate-200 p-4 rounded-sm text-sm focus:ring-1 focus:ring-law-gold focus:bg-white outline-none transition duration-150">
                    </div>
                    <div>
                        <label class="block text-xs font-bold tracking-widest text-law-navy uppercase mb-2">Direct Contact Phone *</label>
                        <input type="tel" required class="w-full bg-slate-50 border border-slate-200 p-4 rounded-sm text-sm focus:ring-1 focus:ring-law-gold focus:bg-white outline-none transition duration-150">
                    </div>
                </div>
                
                <div>
                    <label class="block text-xs font-bold tracking-widest text-law-navy uppercase mb-2">Secure Electronic Email *</label>
                    <input type="email" required class="w-full bg-slate-50 border border-slate-200 p-4 rounded-sm text-sm focus:ring-1 focus:ring-law-gold focus:bg-white outline-none transition duration-150">
                </div>
                
                <div>
                    <label class="block text-xs font-bold tracking-widest text-law-navy uppercase mb-2">Case Framework Description *</label>
                    <textarea rows="5" required class="w-full bg-slate-50 border border-slate-200 p-4 rounded-sm text-sm focus:ring-1 focus:ring-law-gold focus:bg-white outline-none transition duration-150" placeholder="Please provide a brief outline of your situation, relevant court orders, and deadlines..."></textarea>
                </div>
                
                <button type="button" class="w-full bg-gradient-to-r from-law-navy to-slate-800 hover:from-slate-900 hover:to-law-navy text-white font-bold tracking-widest text-xs uppercase py-5 transition rounded-sm shadow-xl transform hover:-translate-y-0.5">
                    Submit Private Case Assessment Request
                </button>
            </form>

            <!-- Structured Interactive Core Contacts Footer Info Grid -->
            <div class="mt-14 pt-10 border-t border-slate-100 grid grid-cols-1 sm:grid-cols-2 gap-8 text-sm text-slate-600">
                <div>
                    <h4 class="font-bold text-law-navy text-xs uppercase tracking-widest mb-2 text-law-gold">Physical Chamber Location</h4>
                    <p class="leading-relaxed text-slate-500">
                        B-117, Indira Nagar,<br>
                        Near Bhootnath Market,<br>
                        Lucknow, Uttar Pradesh - 226016
                    </p>
                </div>
                <div>
                    <h4 class="font-bold text-law-navy text-xs uppercase tracking-widest mb-2 text-law-gold">Chamber Operational Metrics</h4>
                    <p class="text-slate-500">Hours: By Appointment Only</p>
                    <p class="text-slate-500 mt-1">Direct Line: +91 9580264359</p>
                    <p class="text-slate-500">Email: advocateannu21@gmail.com</p>
                </div>
            </div>

            <!-- Mandatory Bar Council Regulatory Compliance Notice Box -->
            <div class="bg-slate-50 border border-slate-200/60 font-serif text-xs leading-relaxed text-slate-500 p-6 mt-12 rounded-sm italic">
                <strong class="font-sans font-bold tracking-wider uppercase text-[10px] text-slate-700 block mb-2 not-italic">Mandatory Regulatory Disclaimer:</strong>
                As per the official statutory rules promulgated by the Bar Council of India, advocates are strictly prohibited from soliciting work or advertising professional services in any public domain. This dedicated chamber profile has been generated and transmitted solely for informational purposes upon the explicit personal request of the recipient. The content enclosed within this system does not constitute binding legal advice, nor does its transmission establish an attorney-client relationship.
            </div>
            
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>