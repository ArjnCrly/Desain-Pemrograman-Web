<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu): void {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";

        if (isset($item['subMenu'])) {
            tampilkanMenuBertingkat(menu: $item['subMenu']);
        }

        echo "</li>";
    }
    echo "</ul>";
}
tampilkanMenuBertingkat(menu: $menu);