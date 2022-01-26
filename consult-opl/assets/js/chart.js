const ctx = document.getElementById("myChart").getContext("2d");

const labels = [
    "JAKBAR",
    "BANTEN",
    "TANGERANG",
    "JAKUT",
    "JAKSEL",
    "JAKPUS",
    "JAKTIM",
    "BOGOR",
    "BEKASI",
];

const data = {
    labels,
    datasets: [{
        data: [3569, 2012, 4302, 3279, 2583, 1223, 3291, 3910, 3257],
        label: "Target Sales"
    },
    ],
};

const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
    },
};

const myCHart = new CharacterData(ctx, config)
