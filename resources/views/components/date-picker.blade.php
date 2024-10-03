<div x-data="datepicker()" class="relative">
    <input
        type="text"
        x-ref="input"
        class="border rounded px-4 py-2 w-full text-center cursor-pointer"
        x-model="formattedDate"
        placeholder="Pilih tanggal"
        @click="isOpen = true"
        readonly
    />

    <div x-show="isOpen" @click.away="isOpen = false" class="absolute top-full mt-2 p-4 bg-white border rounded-lg shadow-lg z-50 w-[20rem]">
        <div class="flex justify-between items-center mb-2">
            <button @click="prevMonth" class="text-gray-500 hover:text-black">
                &lt;
            </button>
            <span class="text-lg font-bold text-gray-800">
                <span x-text="months[month]"></span> <span x-text="year"></span>
            </span>
            <button @click="nextMonth" class="text-gray-500 hover:text-black">
                &gt;
            </button>
        </div>
        <div class="grid grid-cols-7 text-center mx-auto">
            <span class="text-red-500">Min</span>
            <span>Sen</span>
            <span>Sel</span>
            <span>Rab</span>
            <span>Kam</span>
            <span>Jum</span>
            <span class="text-red-500">Sab</span>
        </div>
        <div class="grid grid-cols-7 text-center gap-1 mt-2">
            <template x-for="blank in blankDays" :key="blank">
                <div class="p-2"></div>
            </template>
            <template x-for="(day, index) in daysInMonth" :key="index">
                <div>
                    <button
                        @click="selectDate(day)"
                        :class="{
                            'bg-indigo-500 text-white': day === selectedDay,
                            'text-gray-800': day !== selectedDay,
                            'hover:bg-gray-200': day !== selectedDay
                        }"
                        class="w-full p-2 rounded-full">
                        <span x-text="day"></span>
                    </button>
                </div>
            </template>
        </div>
        <div class="flex justify-between mt-4">
            <button @click="cancel" class="text-gray-600">Batal</button>
            <button @click="save" class="bg-teal-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </div>
</div>

<script>
    function datepicker() {
        return {
            isOpen: false,
            selectedDay: null,
            month: new Date().getMonth(),
            year: new Date().getFullYear(),
            daysInMonth: [],
            blankDays: [],
            formattedDate: '',

            months: [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli',
                'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ],

            init() {
                this.calculateDays();
            },

            calculateDays() {
                const daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
                const firstDayOfMonth = new Date(this.year, this.month).getDay();

                this.blankDays = Array.from({ length: firstDayOfMonth });
                this.daysInMonth = Array.from({ length: daysInMonth }, (v, k) => k + 1);
            },

            selectDate(day) {
                this.selectedDay = day;
                this.formattedDate = `${day} ${this.months[this.month]} ${this.year}`;
                this.isOpen = false;
            },

            prevMonth() {
                if (this.month === 0) {
                    this.month = 11;
                    this.year--;
                } else {
                    this.month--;
                }
                this.calculateDays();
            },

            nextMonth() {
                if (this.month === 11) {
                    this.month = 0;
                    this.year++;
                } else {
                    this.month++;
                }
                this.calculateDays();
            },

            cancel() {
                this.isOpen = false;
            },

            save() {
                this.isOpen = false;
                // Handle save logic here
            }
        }
    }
</script>
