<template>
    <div
        class="flex flex-col sm:flex-row gap-4 items-center justify-center mx-auto py-10 font-sans min-h-screen"
    >
        <!-- Calculator -->
        <div
            class="w-80 md:w-84 p-4 bg-gray-900 rounded-2xl shadow-2xl text-gray-100 min-w-0"
        >
            <!-- Display Screen -->
            <div
                class="bg-black/40 border border-gray-700/50 p-4 rounded-xl mb-4 text-right flex flex-col justify-end h-24 min-w-0 w-full overflow-hidden"
            >
                <div
                    class="text-gray-400 text-xs md:text-sm tracking-wider h-4 md:h-6 overflow-hidden w-full"
                >
                    {{ previousOperation }}
                </div>
                <div
                    class="text-xl md:text-2xl font-bold tracking-wide truncate w-full"
                >
                    {{ currentInput || "0" }}
                </div>
            </div>

            <!-- Keypad -->
            <div class="grid grid-cols-4 gap-2">
                <button
                    @click="clear"
                    :class="
                        pressedKey === 'c' ||
                        pressedKey === 'C' ||
                        pressedKey === 'Escape'
                            ? 'scale-95 bg-gray-600'
                            : 'bg-gray-700'
                    "
                    class="col-span-2 hover:bg-gray-600 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    C
                </button>
                <button
                    @click="deleteNumber"
                    :class="
                        pressedKey === 'Backspace' || pressedKey === 'Delete'
                            ? 'scale-95 bg-gray-600'
                            : 'bg-gray-700'
                    "
                    class="hover:bg-gray-600 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    DEL
                </button>
                <button
                    @click="chooseOperation('/')"
                    :class="{ 'scale-95 bg-amber-600': pressedKey === '/' }"
                    class="bg-amber-500 hover:bg-amber-600 text-white font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    /
                </button>

                <button
                    @click="appendNumber('7')"
                    :class="
                        pressedKey === '7'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    7
                </button>
                <button
                    @click="appendNumber('8')"
                    :class="
                        pressedKey === '8'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    8
                </button>
                <button
                    @click="appendNumber('9')"
                    :class="
                        pressedKey === '9'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    9
                </button>
                <button
                    @click="chooseOperation('*')"
                    :class="{ 'scale-95 bg-amber-600': pressedKey === '*' }"
                    class="bg-amber-500 hover:bg-amber-600 text-white font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    *
                </button>

                <button
                    @click="appendNumber('4')"
                    :class="
                        pressedKey === '4'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    4
                </button>
                <button
                    @click="appendNumber('5')"
                    :class="
                        pressedKey === '5'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    5
                </button>
                <button
                    @click="appendNumber('6')"
                    :class="
                        pressedKey === '6'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    6
                </button>
                <button
                    @click="chooseOperation('-')"
                    :class="{ 'scale-95 bg-amber-600': pressedKey === '-' }"
                    class="bg-amber-500 hover:bg-amber-600 text-white font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    -
                </button>

                <button
                    @click="appendNumber('1')"
                    :class="
                        pressedKey === '1'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    1
                </button>
                <button
                    @click="appendNumber('2')"
                    :class="
                        pressedKey === '2'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    2
                </button>
                <button
                    @click="appendNumber('3')"
                    :class="
                        pressedKey === '3'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    3
                </button>
                <button
                    @click="chooseOperation('+')"
                    :class="{ 'scale-95 bg-amber-600': pressedKey === '+' }"
                    class="bg-amber-500 hover:bg-amber-600 text-white font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    +
                </button>

                <button
                    @click="appendNumber('0')"
                    :class="
                        pressedKey === '0'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="col-span-2 hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    0
                </button>
                <button
                    @click="appendNumber('.')"
                    :class="
                        pressedKey === '.'
                            ? 'scale-95 bg-gray-700'
                            : 'bg-gray-800'
                    "
                    class="hover:bg-gray-700 text-gray-100 font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    .
                </button>
                <button
                    @click="compute"
                    :class="{
                        'scale-95 bg-emerald-700':
                            pressedKey === 'Enter' || pressedKey === '=',
                    }"
                    class="bg-emerald-600 hover:bg-emerald-700 text-white font-bold p-4 rounded-xl transition duration-150 active:scale-95"
                >
                    =
                </button>
            </div>
        </div>

        <!-- History Panel -->
        <div
            class="w-80 sm:w-56 bg-gray-900 border border-gray-700/50 p-4 rounded-2xl shadow-2xl text-gray-100 flex flex-col h-[416px]"
        >
            <div
                class="text-sm font-semibold text-gray-400 mb-3 border-b border-gray-800 pb-2 flex justify-between items-center"
            >
                <span>History</span>
                <button
                    v-if="history.length > 0"
                    @click="clearHistory"
                    class="text-xs cursor-pointer text-red-400 hover:text-red-300"
                >
                    Clear
                </button>
            </div>
            <div
                class="flex-1 overflow-y-auto space-y-2 flex flex-col scrollbar-thin scrollbar-thumb-slate-400 scrollbar-track-transparent pr-1"
            >
                <div
                    v-if="history.length === 0"
                    class="text-gray-600 text-sm text-center my-auto"
                >
                    No history yet
                </div>
                <div
                    v-for="(item, index) in history"
                    :key="index"
                    @click="loadHistoryItem(item)"
                    class="bg-black/30 p-2.5 rounded-xl text-right border border-gray-800 hover:border-amber-500/50 hover:bg-black/50 cursor-pointer transition duration-150"
                >
                    <div class="text-xs text-gray-400">
                        {{ item.expression }}
                    </div>
                    <div class="text-base font-bold text-gray-200">
                        {{ item.result }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref, computed, onMounted, onUnmounted } from "vue";

const props = defineProps<{
    initialA?: number | string | null;
    initialB?: number | string | null;
    initialOperation?: string | null;
    initialResult?: number | string | null;
    initialError?: string | null;
}>();

const formatNumber = (num: number | string): string => {
    const n = typeof num === "string" ? parseFloat(num) : num;
    if (isNaN(n)) return "Error";

    if (n === 0) return "0";

    const absVal = Math.abs(n);

    if (absVal >= 1e15 || absVal < 1e-10) {
        return n.toExponential(10);
    }

    const fixed = n.toFixed(10);
    return parseFloat(fixed).toString();
};

const currentInput = ref<string>(
    props.initialResult !== null && props.initialResult !== undefined
        ? props.initialResult.toString()
        : props.initialA !== null && props.initialA !== undefined
          ? props.initialA.toString()
          : "",
);

const previousInput = ref<null | string>(
    props.initialResult !== null && props.initialResult !== undefined
        ? null
        : props.initialA !== null && props.initialA !== undefined
          ? props.initialA.toString()
          : null,
);

const operation = ref<null | string>(
    props.initialResult !== null && props.initialResult !== undefined
        ? null
        : props.initialOperation || null,
);

const finishedOperation = ref<string>(
    props.initialA !== null && props.initialB !== null && props.initialOperation
        ? `${props.initialA} ${props.initialOperation} ${props.initialB} =`
        : "",
);

const resetScreen = ref<boolean>(
    props.initialResult !== null && props.initialResult !== undefined,
);

const history = ref<{ expression: string; result: string; state: any }[]>([]);

if (
    props.initialA !== null &&
    props.initialB !== null &&
    props.initialOperation
) {
    const expr = `${props.initialA} ${props.initialOperation} ${props.initialB}`;
    history.value.unshift({
        expression: expr,
        result: props.initialResult?.toString() || "0",
        state: {
            currentInput: props.initialResult?.toString() || "",
            previousInput: null,
            operation: null,
            finishedOperation: `${expr} =`,
            resetScreen: true,
        },
    });
}

const pressedKey = ref<null | string>(null);

const previousOperation = computed(() => {
    if (finishedOperation.value) return finishedOperation.value;
    if (previousInput.value !== null && operation.value !== null) {
        return currentInput.value
            ? `${previousInput.value} ${operation.value} ${currentInput.value}`
            : `${previousInput.value} ${operation.value}`;
    }
    return "";
});

const appendNumber = (number: string) => {
    if (finishedOperation.value) {
        finishedOperation.value = "";
        previousInput.value = null;
        operation.value = null;
    }
    if (currentInput.value === "0" || resetScreen.value) {
        currentInput.value = "";
        resetScreen.value = false;
    }
    if (number === "." && currentInput.value === "") {
        currentInput.value = "0";
    }
    if (number === "." && currentInput.value === "-") {
        currentInput.value = "-0";
    }
    if (number === "." && currentInput.value.includes(".")) return;
    if (currentInput.value.length >= 15) return;
    if (currentInput.value.includes(".") && number !== ".") {
        const decimalPart = currentInput.value.split(".")[1] || "";
        if (decimalPart.length >= 10) return;
    }
    currentInput.value += number;
};

const clear = () => {
    currentInput.value = "";
    previousInput.value = null;
    operation.value = null;
    finishedOperation.value = "";
    resetScreen.value = false;
};

const clearHistory = () => {
    history.value = [];
};

const deleteNumber = () => {
    if (finishedOperation.value) return;
    currentInput.value = currentInput.value.toString().slice(0, -1);
};

const chooseOperation = (op: string) => {
    if (finishedOperation.value) {
        finishedOperation.value = "";
    }

    if (currentInput.value === "" && previousInput.value === null) {
        if (op === "-") {
            currentInput.value = "-";
            return;
        }
        return;
    }

    if (currentInput.value === "" && previousInput.value !== null) {
        operation.value = op;
        return;
    }

    if (
        previousInput.value !== null &&
        operation.value !== null &&
        currentInput.value !== "" &&
        currentInput.value !== "-"
    ) {
        computeIntermediate();
    } else if (currentInput.value !== "" && currentInput.value !== "-") {
        previousInput.value = currentInput.value;
    }

    operation.value = op;
    currentInput.value = "";
    resetScreen.value = false;
};

const computeIntermediate = () => {
    const prev = parseFloat(previousInput.value!);
    const current = parseFloat(currentInput.value);
    if (isNaN(prev) || isNaN(current)) return;

    let comp: any;
    switch (operation.value) {
        case "+":
            comp = prev + current;
            break;
        case "-":
            comp = prev - current;
            break;
        case "*":
            comp = prev * current;
            break;
        case "/":
            comp = current === 0 ? "Error" : prev / current;
            break;
    }
    previousInput.value = comp === "Error" ? "Error" : formatNumber(comp);
    currentInput.value = "";
};

const compute = () => {
    if (
        previousInput.value === null ||
        operation.value === null ||
        currentInput.value === ""
    )
        return;

    const prev = parseFloat(previousInput.value);
    const current = parseFloat(currentInput.value);

    if (isNaN(prev) || isNaN(current)) return;

    let computation: any;
    const currentOpSymbol = operation.value;

    switch (currentOpSymbol) {
        case "+":
            computation = prev + current;
            break;
        case "-":
            computation = prev - current;
            break;
        case "*":
            computation = prev * current;
            break;
        case "/":
            computation = current === 0 ? "Error" : prev / current;
            break;
        default:
            return;
    }

    const formattedResult =
        computation === "Error" ? "Error" : formatNumber(computation);
    const expressionStr = `${prev} ${currentOpSymbol} ${current}`;
    finishedOperation.value = `${expressionStr} =`;

    history.value.unshift({
        expression: expressionStr,
        result: formattedResult,
        state: {
            currentInput: formattedResult,
            previousInput: null,
            operation: null,
            finishedOperation: `${expressionStr} =`,
            resetScreen: true,
        },
    });

    const maxHistoryLength = 5;
    if (history.value.length > maxHistoryLength) {
        history.value.pop();
    }

    currentInput.value = formattedResult;
    operation.value = null;
    previousInput.value = null;
    resetScreen.value = true;
};

const loadHistoryItem = (item: any) => {
    currentInput.value = item.state.currentInput;
    previousInput.value = item.state.previousInput;
    operation.value = item.state.operation;
    finishedOperation.value = item.state.finishedOperation;
    resetScreen.value = item.state.resetScreen;
};

const handleKeyDown = (e: KeyboardEvent) => {
    pressedKey.value = e.key;

    if ((e.key >= "0" && e.key <= "9") || e.key === ".") {
        appendNumber(e.key);
    } else if (["+", "-", "*", "/"].includes(e.key)) {
        chooseOperation(e.key);
    } else if (e.key === "Enter" || e.key === "=") {
        e.preventDefault();
        compute();
    } else if (e.key === "Backspace" || e.key === "Delete") {
        deleteNumber();
    } else if (e.key === "Escape" || e.key.toLowerCase() === "c") {
        clear();
    }
};

const handleKeyUp = () => {
    pressedKey.value = null;
};

onMounted(() => {
    window.addEventListener("keydown", handleKeyDown);
    window.addEventListener("keyup", handleKeyUp);
});

onUnmounted(() => {
    window.removeEventListener("keydown", handleKeyDown);
    window.removeEventListener("keyup", handleKeyUp);
});
</script>
