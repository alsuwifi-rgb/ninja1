<style>
    .column {
        padding: 0px 12px 0px 12px;
        display: flex;
        flex-direction: row;
        gap: 20px;
        align-items: flex-start;
        justify-content: flex-start;
        align-self: stretch;
        flex-shrink: 0;
        height: 765px;
        position: relative;
        overflow: scroll;
    }

    .work-order-row {
        display: flex;
        flex-direction: column;
        gap: 11px;
        align-items: flex-start;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
        min-width: 18%;
    }

    .work-order-row-header {
        font-size: 24px;
        border-bottom: 1px dotted #000000;
        width: 100%;
        text-align: center;
        padding: 5px
    }

    .work-order-card {
        flex-shrink: 0;
        width: 269.4px;
        height: 239px;
        position: relative;
        box-shadow: var(--sh2-box-shadow, 8px 8px 24px 0px rgba(0, 0, 0, 0.18));
    }

    .rectangle-13 {
        background: #fcfbff;
        border-radius: 18px;
        border-style: solid;
        border-color: #969696;
        border-width: 9px 0px 0px 0px;
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0%;
        left: 0%;
        bottom: 0%;
        top: 0%;
    }

    .frame-1000005259 {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        height: 200px;
        position: absolute;
        left: calc(50% - 107.45px);
        top: 16px;
    }

    .frame-1000005252 {
        display: flex;
        flex-direction: column;
        gap: 0px;
        align-items: flex-start;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
    }

    .frame-1000005251 {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .w-o-123-36-52705 {
        color: #111111;
        text-align: center;
        font-family: "Poppins-SemiBold", sans-serif;
        font-size: 14px;
        font-weight: 600;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .frame-1000001640 {
        display: flex;
        flex-direction: row;
        gap: 8px;
        align-items: center;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
    }

    .fluent-vehicle-motorcycle-48-regular {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .frame-1000001642 {
        display: flex;
        flex-direction: row;
        gap: 0px;
        align-items: center;
        justify-content: flex-start;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .frame-1000001497 {
        display: flex;
        flex-direction: row;
        gap: 12px;
        align-items: center;
        justify-content: flex-start;
        flex-shrink: 0;
        width: 104px;
        position: relative;
    }

    .ic-baseline-delivery-dining {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .bmw {
        color: #000000;
        text-align: left;
        font-family: "NotoSansArabic-Regular", sans-serif;
        font-size: 10px;
        line-height: 20px;
        font-weight: 400;
        position: relative;
    }

    .frame-1000001499 {
        display: flex;
        flex-direction: row;
        gap: 8px;
        align-items: center;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
    }

    .total-00-00 {
        color: var(--moskaleamapp-mine-shaft, #212121);
        text-align: left;
        font-family: "NotoSansArabic-Bold", sans-serif;
        font-size: 10px;
        line-height: 22px;
        font-weight: 700;
        position: relative;
    }

    .due-00-00 {
        color: var(--moskaleamapp-pomegranate, #f44336);
        text-align: left;
        font-family: "NotoSansArabic-Regular", sans-serif;
        font-size: 10px;
        line-height: 22px;
        font-weight: 400;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .head {
        display: flex;
        flex-direction: row;
        gap: 57px;
        align-items: flex-start;
        justify-content: flex-start;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .frame-1000005256 {
        display: flex;
        flex-direction: column;
        gap: 0px;
        align-items: flex-start;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
    }

    .frame-10000016422 {
        display: flex;
        flex-direction: column;
        gap: 2px;
        align-items: flex-start;
        justify-content: center;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .frame-1000005257 {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        flex-shrink: 0;
        width: 216px;
        position: relative;
    }

    .garage {
        color: #333333;
        text-align: left;
        font-family: "Poppins-Bold", sans-serif;
        font-size: 12px;
        line-height: 20px;
        font-weight: 700;
        position: relative;
    }

    .garage-span {}

    .motor {
        color: #333333;
        text-align: left;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        line-height: 20px;
        font-weight: 400;
        position: relative;
    }

    .frame-1000001641 {
        display: flex;
        flex-direction: column;
        gap: 2px;
        align-items: flex-start;
        justify-content: center;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .driver {
        color: #333333;
        text-align: left;
        font-family: "Poppins-Bold", sans-serif;
        font-size: 12px;
        line-height: 20px;
        font-weight: 700;
        position: relative;
    }

    .ahmed-mohamed {
        color: #333333;
        text-align: left;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        line-height: 20px;
        font-weight: 400;
        position: relative;
    }

    .frame-1000005262 {
        display: flex;
        flex-direction: column;
        gap: 0px;
        align-items: center;
        justify-content: flex-start;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .group-1000002307 {
        flex-shrink: 0;
        width: 211.49px;
        height: 9.09px;
        position: static;
    }

    .rectangle-18 {
        background: #d9d9d9;
        border-radius: 10px;
        width: 97.01%;
        height: 33.56%;
        position: absolute;
        right: 1.49%;
        left: 1.49%;
        bottom: 66.44%;
        top: 0%;
    }

    .frame-1000005258 {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .progress {
        color: #27104e;
        text-align: left;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 12px;
        font-weight: 400;
        position: relative;
    }

    ._30 {
        color: #27104e;
        text-align: right;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 12px;
        font-weight: 400;
        position: relative;
    }

    .frame-1000005261 {
        display: flex;
        flex-direction: row;
        gap: 50px;
        align-items: flex-start;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
    }

    .frame-1000005255 {
        display: flex;
        flex-direction: row;
        gap: 5px;
        align-items: center;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
    }

    .frame-1000005254 {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
    }

    .ellipse-9 {
        border-radius: 50%;
        border-style: solid;
        border-color: #ffffff;
        border-width: 1px;
        flex-shrink: 0;
        width: 22px;
        height: 22px;
        position: relative;
        object-fit: cover;
        aspect-ratio: 1;
    }

    .ellipse-10 {
        margin: 0 0 0 -11px;
        border-radius: 50%;
        border-style: solid;
        border-color: #ffffff;
        border-width: 1px;
        flex-shrink: 0;
        width: 22px;
        height: 22px;
        position: relative;
        object-fit: cover;
        aspect-ratio: 1;
    }

    .group-1000002308 {
        flex-shrink: 0;
        width: 22px;
        height: 22px;
        position: static;
        aspect-ratio: 1;
    }

    .ellipse-4 {
        background: var(--grays-gray-2, #aeaeb2);
        border-radius: 50%;
        width: 36.67%;
        height: 100%;
        position: absolute;
        right: 0%;
        left: 63.33%;
        bottom: 0%;
        top: 0%;
    }

    .akar-icons-plus {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .frame-1000005253 {
        background: #e8e8e8;
        border-radius: 22.69px;
        padding: 2px 0px 2px 0px;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 86px;
        height: 23px;
        position: relative;
    }

    ._25-days-left {
        color: #1c1d22;
        text-align: center;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        font-weight: 400;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .frame-1000005263 {
        display: flex;
        flex-direction: column;
        gap: 4px;
        align-items: flex-start;
        justify-content: flex-start;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .line-1 {
        margin-top: -2.27px;
        border-style: solid;
        border-color: rgba(217, 217, 217, 0.5);
        border-width: 2.27px 0 0 0;
        align-self: stretch;
        flex-shrink: 0;
        height: 0px;
        position: relative;
    }

    .frame-1000005260 {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        align-self: stretch;
        flex-shrink: 0;
        position: relative;
    }

    .nov-26-2025 {
        color: #969696;
        text-align: left;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        font-weight: 400;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }

    .group-20-3 {
        width: 8.22%;
        height: 11.11%;
        position: absolute;
        right: 85.53%;
        left: 6.25%;
        bottom: 6.67%;
        top: 82.22%;
    }

    .fluent-vehicle-motorcycle-48-regular2 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular2 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .game-icons-city-car {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
    }

    .garage-span {}

    .akar-icons-plus2 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .fluent-vehicle-motorcycle-48-regular3 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular3 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .game-icons-city-car2 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
    }

    .garage-span {}

    .akar-icons-plus3 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .rectangle-132 {
        background: #fcfbff;
        border-radius: 18px;
        border-style: solid;
        border-color: var(--colors-yellow, #ffcc00);
        border-width: 9px 0px 0px 0px;
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0%;
        left: 0%;
        bottom: 0%;
        top: 0%;
    }

    .fluent-vehicle-motorcycle-48-regular4 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular4 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .ic-baseline-delivery-dining2 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .garage-span {}

    .rectangle-19 {
        background: var(--colors-yellow, #ffcc00);
        border-radius: 10px;
        width: 26.61%;
        height: 33.22%;
        position: absolute;
        right: 71.9%;
        left: 1.49%;
        bottom: 66.61%;
        top: 0.17%;
    }

    .ellipse-42 {
        background: var(--vibrant-fills-vibrant-secondary,
                linear-gradient(to left, rgba(61, 61, 61, 0.5), rgba(61, 61, 61, 0.5)),
                linear-gradient(to left, rgba(127, 127, 127, 0.4), rgba(127, 127, 127, 0.4)));
        border-radius: 50%;
        width: 36.67%;
        height: 100%;
        position: absolute;
        right: 0%;
        left: 63.33%;
        bottom: 0%;
        top: 0%;
    }

    .akar-icons-plus4 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .frame-10000052532 {
        background: rgba(255, 221, 135, 0.23);
        border-radius: 22.69px;
        padding: 2px 0px 2px 0px;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 86px;
        height: 23px;
        position: relative;
    }

    ._25-days-left2 {
        color: var(--colors-yellow, #ffcc00);
        text-align: center;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        font-weight: 400;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fluent-vehicle-motorcycle-48-regular5 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular5 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .ic-baseline-delivery-dining3 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .garage-span {}

    .akar-icons-plus5 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .fluent-vehicle-motorcycle-48-regular6 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular6 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .ic-baseline-delivery-dining4 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .garage-span {}

    .akar-icons-plus6 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .rectangle-133 {
        background: #fcfbff;
        border-radius: 18px;
        border-style: solid;
        border-color: var(--colors-red, #ff3b30);
        border-width: 9px 0px 0px 0px;
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0%;
        left: 0%;
        bottom: 0%;
        top: 0%;
    }

    .fluent-vehicle-motorcycle-48-regular7 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular7 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .ic-baseline-delivery-dining5 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .garage-span {}

    .rectangle-192 {
        background: var(--colors-red, #ff3b30);
        border-radius: 10px;
        width: 26.61%;
        height: 33.22%;
        position: absolute;
        right: 71.9%;
        left: 1.49%;
        bottom: 66.61%;
        top: 0.17%;
    }

    .akar-icons-plus7 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .frame-10000052533 {
        background: rgba(205, 10, 10, 0.09);
        border-radius: 22.69px;
        padding: 2px 0px 2px 0px;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 86px;
        height: 23px;
        position: relative;
    }

    ._25-days-left3 {
        color: var(--colors-red, #ff3b30);
        text-align: center;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        font-weight: 400;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fluent-vehicle-motorcycle-48-regular8 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular8 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .game-icons-city-car3 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
    }

    .garage-span {}

    .akar-icons-plus8 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .fluent-vehicle-motorcycle-48-regular9 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular9 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .game-icons-city-car4 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
    }

    .garage-span {}

    .akar-icons-plus9 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .rectangle-134 {
        background: #fcfbff;
        border-radius: 18px;
        border-style: solid;
        border-color: var(--pr2, #396ffd);
        border-width: 9px 0px 0px 0px;
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0%;
        left: 0%;
        bottom: 0%;
        top: 0%;
    }

    .fluent-vehicle-motorcycle-48-regular10 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular10 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .game-icons-city-car5 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
    }

    .garage-span {}

    .rectangle-193 {
        background: var(--pr2, #396ffd);
        border-radius: 10px;
        width: 26.61%;
        height: 33.22%;
        position: absolute;
        right: 71.9%;
        left: 1.49%;
        bottom: 66.61%;
        top: 0.17%;
    }

    .akar-icons-plus10 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .frame-10000052534 {
        background: rgba(0, 67, 255, 0.09);
        border-radius: 22.69px;
        padding: 2px 0px 2px 0px;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 86px;
        height: 23px;
        position: relative;
    }

    ._25-days-left4 {
        color: var(--pr2, #396ffd);
        text-align: center;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        font-weight: 400;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fluent-vehicle-motorcycle-48-regular11 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular11 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .ic-baseline-delivery-dining6 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .garage-span {}

    .akar-icons-plus11 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .fluent-vehicle-motorcycle-48-regular12 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular12 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .ic-baseline-delivery-dining7 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .garage-span {}

    .akar-icons-plus12 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .rectangle-135 {
        background: #fcfbff;
        border-radius: 18px;
        border-style: solid;
        border-color: #6ff25a;
        border-width: 9px 0px 0px 0px;
        width: 100%;
        height: 100%;
        position: absolute;
        right: 0%;
        left: 0%;
        bottom: 0%;
        top: 0%;
    }

    .fluent-vehicle-motorcycle-48-regular13 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular13 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .ic-baseline-delivery-dining8 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
        aspect-ratio: 1;
    }

    .garage-span {}

    .rectangle-194 {
        background: var(--s1, #1eb105);
        border-radius: 10px;
        width: 26.61%;
        height: 33.22%;
        position: absolute;
        right: 71.9%;
        left: 1.49%;
        bottom: 66.61%;
        top: 0.17%;
    }

    .akar-icons-plus13 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .frame-10000052535 {
        background: rgba(112, 242, 90, 0.3);
        border-radius: 22.69px;
        padding: 2px 0px 2px 0px;
        display: flex;
        flex-direction: row;
        gap: 10px;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        width: 86px;
        height: 23px;
        position: relative;
    }

    ._25-days-left5 {
        color: #1eb105;
        text-align: center;
        font-family: "Poppins-Regular", sans-serif;
        font-size: 10px;
        font-weight: 400;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .fluent-vehicle-motorcycle-48-regular14 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular14 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .game-icons-city-car6 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
    }

    .garage-span {}

    .akar-icons-plus14 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }

    .fluent-vehicle-motorcycle-48-regular15 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .fluent-vehicle-car-profile-ltr-16-regular15 {
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        position: relative;
        overflow: visible;
    }

    .game-icons-city-car7 {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        position: relative;
        overflow: visible;
    }

    .garage-span {}

    .akar-icons-plus15 {
        width: 23.33%;
        height: 63.64%;
        position: absolute;
        right: 6.66%;
        left: 70%;
        bottom: 18.18%;
        top: 18.18%;
        overflow: visible;
    }
</style>

<div class="column">
    <div class="work-order-row">
        <span class="work-order-row-header">{{ __('global.draft') }}</span>
        @foreach ($groupedRequests['draft'] as $draft_request )

        <a href="{{ route('admin.work_orders.show',['id'=>$draft_request->id]) }}">
            <div class="work-order-card">
                <div class="rectangle-13"></div>
                <div class="frame-1000005259">
                    <div class="frame-1000005252">
                        <div class="frame-1000005251">
                            <div class="w-o-123-36-52705">{{ $draft_request->code() }}</div>
                            <div class="frame-1000001640">

                                <svg width="37" height="15" viewBox="0 0 37 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_15_2488)">
                                        <path
                                            d="M7.23587 2.5033C7.13917 2.5033 7.04644 2.54171 6.97807 2.61008C6.9097 2.67845 6.87128 2.77119 6.87128 2.86788C6.87128 2.96457 6.9097 3.05731 6.97807 3.12568C7.04644 3.19405 7.13917 3.23246 7.23587 3.23246H8.21295C8.41041 3.23246 8.59008 3.34621 8.67437 3.52471L9.61149 5.50513C9.45793 5.44831 9.29543 5.41947 9.1317 5.41996H7.62262C7.17576 5.41995 6.73773 5.54437 6.35761 5.77928C5.97748 6.01418 5.67027 6.3503 5.47041 6.74996L5.11458 7.46163H3.51712C3.1096 7.46172 2.71022 7.57563 2.36398 7.79054C2.01774 8.00545 1.73841 8.3128 1.55749 8.67795C1.37656 9.04309 1.30124 9.45152 1.34 9.85719C1.37876 10.2629 1.53006 10.6496 1.77686 10.9739C2.02365 11.2982 2.35613 11.5471 2.7368 11.6925C3.11747 11.838 3.5312 11.8742 3.93136 11.7971C4.33151 11.7201 4.70218 11.5327 5.00158 11.2563C5.30098 10.9798 5.5172 10.6252 5.62587 10.2325H6.91795C7.25648 10.2325 7.58832 10.1382 7.87629 9.96019C8.16426 9.7822 8.39698 9.52755 8.54837 9.22475L9.06549 8.1908H9.1317C9.41978 8.1909 9.70072 8.1012 9.93544 7.93418C10.1702 7.76716 10.347 7.53112 10.4413 7.25892L10.7233 7.85509C10.2737 8.16915 9.95837 8.64068 9.83996 9.17623C9.72155 9.71178 9.80865 10.2723 10.084 10.7466C10.3593 11.221 10.8028 11.5746 11.3266 11.7374C11.8504 11.9002 12.4162 11.8603 12.9119 11.6256C13.4077 11.3909 13.7971 10.9785 14.0032 10.4702C14.2092 9.96187 14.2168 9.3947 14.0243 8.88107C13.8319 8.36745 13.4536 7.94485 12.9643 7.69702C12.475 7.44919 11.9104 7.39422 11.3825 7.543L11.0625 6.86692C11.1226 6.8745 11.1839 6.8783 11.2463 6.8783H12.34C12.5413 6.8783 12.7046 6.71496 12.7046 6.51371V4.32621C12.7046 4.12496 12.5413 3.96163 12.34 3.96163H11.2463C10.726 3.96163 10.2692 4.23434 10.0111 4.64442L9.33353 3.21263C9.23312 3.00045 9.07453 2.82115 8.8762 2.69558C8.67788 2.57 8.44798 2.50333 8.21324 2.5033H7.23587ZM5.69995 9.5033C5.66802 9.01627 5.47348 8.55407 5.14753 8.1908H8.25028L7.8962 8.89867C7.80537 9.08035 7.66574 9.23314 7.49295 9.33993C7.32017 9.44672 7.12107 9.50329 6.91795 9.5033H5.69995ZM3.51712 8.1908C3.90389 8.1908 4.27482 8.34444 4.54831 8.61793C4.82181 8.89142 4.97545 9.26235 4.97545 9.64913C4.97545 10.0359 4.82181 10.4068 4.54831 10.6803C4.27482 10.9538 3.90389 11.1075 3.51712 11.1075C3.13034 11.1075 2.75941 10.9538 2.48592 10.6803C2.21243 10.4068 2.05878 10.0359 2.05878 9.64913C2.05878 9.26235 2.21243 8.89142 2.48592 8.61793C2.75941 8.34444 3.13034 8.1908 3.51712 8.1908ZM10.5171 9.64913C10.5171 9.1988 10.7213 8.7963 11.0421 8.52855L11.6459 9.80517C11.6664 9.84845 11.6952 9.88727 11.7307 9.91942C11.7662 9.95156 11.8076 9.9764 11.8527 9.99252C11.8978 10.0086 11.9457 10.0157 11.9935 10.0133C12.0413 10.011 12.0882 9.9992 12.1315 9.97871C12.1748 9.95822 12.2136 9.9294 12.2457 9.89391C12.2779 9.85841 12.3027 9.81694 12.3188 9.77184C12.335 9.72675 12.342 9.67892 12.3397 9.63109C12.3373 9.58326 12.3255 9.53637 12.305 9.49309L11.7013 8.21646C11.7901 8.19955 11.8815 8.19099 11.9755 8.1908C12.2639 8.1908 12.5458 8.27633 12.7857 8.43657C13.0255 8.59681 13.2124 8.82457 13.3228 9.09105C13.4332 9.35752 13.462 9.65075 13.4058 9.93364C13.3495 10.2165 13.2106 10.4764 13.0066 10.6803C12.8027 10.8843 12.5428 11.0232 12.26 11.0794C11.9771 11.1357 11.6838 11.1068 11.4174 10.9965C11.1509 10.8861 10.9231 10.6992 10.7629 10.4593C10.6026 10.2195 10.5171 9.93756 10.5171 9.64913ZM8.84791 7.46163H5.93008L6.12258 7.07605C6.26188 6.7975 6.476 6.56325 6.74094 6.39953C7.00588 6.23582 7.31118 6.14911 7.62262 6.14913H9.1317C9.30575 6.14913 9.47267 6.21827 9.59574 6.34134C9.71881 6.46441 9.78795 6.63133 9.78795 6.80538C9.78795 6.97943 9.71881 7.14635 9.59574 7.26942C9.47267 7.39249 9.30575 7.46163 9.1317 7.46163H8.84791ZM11.2463 4.6908H11.9755V6.14913H11.2463C11.0529 6.14913 10.8674 6.07231 10.7307 5.93556C10.5939 5.79882 10.5171 5.61335 10.5171 5.41996C10.5171 5.22658 10.5939 5.04111 10.7307 4.90436C10.8674 4.76762 11.0529 4.6908 11.2463 4.6908Z"
                                            fill="#767676" />
                                    </g>
                                    <path
                                        d="M33.0501 5.85748L32.932 5.81548L31.9388 3.95348C31.7523 3.60356 31.4742 3.31093 31.1342 3.10687C30.7942 2.90281 30.4051 2.795 30.0086 2.79498H27.5078C27.0486 2.79496 26.601 2.93947 26.2285 3.20802C25.856 3.47657 25.5775 3.85554 25.4323 4.29123L24.959 5.71136C24.5624 5.87852 24.2239 6.15895 23.9859 6.51755C23.748 6.87615 23.621 7.29698 23.6211 7.72736V8.70123C23.6211 9.32248 23.9912 9.85623 24.5223 10.0969C24.5911 10.4909 24.7928 10.8496 25.0939 11.113C25.395 11.3764 25.7772 11.5287 26.1769 11.5446C26.5766 11.5605 26.9697 11.4389 27.2907 11.2001C27.6117 10.9614 27.8412 10.6199 27.941 10.2325H31.5512C31.651 10.6199 31.8805 10.9614 32.2015 11.2001C32.5225 11.4389 32.9156 11.5605 33.3153 11.5446C33.715 11.5287 34.0972 11.3764 34.3983 11.113C34.6993 10.8496 34.9011 10.4909 34.9698 10.0969C35.2384 9.97562 35.4663 9.77945 35.6262 9.5319C35.7861 9.28434 35.8711 8.99592 35.8711 8.70123V8.40461C35.871 7.95304 35.7312 7.51256 35.4708 7.14361C35.2105 6.77467 34.8423 6.49535 34.4168 6.34398L33.0956 5.87411V5.85748H33.0501ZM27.5078 3.66998H28.4336V5.85748H25.8322L26.2618 4.56773C26.349 4.3062 26.5162 4.07874 26.7398 3.9176C26.9635 3.75646 27.2322 3.66982 27.5078 3.66998ZM29.3086 3.66998H30.0086C30.2465 3.6699 30.48 3.7345 30.6841 3.85687C30.8881 3.97925 31.0551 4.15479 31.1671 4.36473L31.9633 5.85748H29.3086V3.66998ZM32.8987 6.73248L34.1237 7.16823C34.379 7.25908 34.5998 7.42669 34.756 7.64805C34.9122 7.86941 34.9961 8.13369 34.9961 8.40461V8.70123C34.9961 8.85436 34.9436 8.99523 34.8561 9.10723C34.7128 8.77082 34.4677 8.48776 34.1552 8.2978C33.8427 8.10784 33.4786 8.02054 33.114 8.04815C32.7494 8.07576 32.4025 8.2169 32.1222 8.45174C31.8419 8.68658 31.6423 9.00332 31.5512 9.35748H27.941C27.8499 9.00332 27.6502 8.68658 27.3699 8.45174C27.0896 8.2169 26.7428 8.07576 26.3782 8.04815C26.0136 8.02054 25.6495 8.10784 25.337 8.2978C25.0245 8.48776 24.7794 8.77082 24.6361 9.10723C24.5452 8.99143 24.4959 8.84844 24.4961 8.70123V7.72736C24.4961 7.33361 24.6711 6.97486 24.9511 6.73248H32.8987ZM25.3711 9.79498C25.3711 9.56292 25.4633 9.34036 25.6274 9.17626C25.7915 9.01217 26.014 8.91998 26.2461 8.91998C26.4782 8.91998 26.7007 9.01217 26.8648 9.17626C27.0289 9.34036 27.1211 9.56292 27.1211 9.79498C27.1211 10.027 27.0289 10.2496 26.8648 10.4137C26.7007 10.5778 26.4782 10.67 26.2461 10.67C26.014 10.67 25.7915 10.5778 25.6274 10.4137C25.4633 10.2496 25.3711 10.027 25.3711 9.79498ZM33.2461 8.91998C33.4782 8.91998 33.7007 9.01217 33.8648 9.17626C34.0289 9.34036 34.1211 9.56292 34.1211 9.79498C34.1211 10.027 34.0289 10.2496 33.8648 10.4137C33.7007 10.5778 33.4782 10.67 33.2461 10.67C33.014 10.67 32.7915 10.5778 32.6274 10.4137C32.4633 10.2496 32.3711 10.027 32.3711 9.79498C32.3711 9.56292 32.4633 9.34036 32.6274 9.17626C32.7915 9.01217 33.014 8.91998 33.2461 8.91998Z"
                                        fill="#396FFD" />
                                    <defs>
                                        <clipPath id="clip0_15_2488">
                                            <rect width="14" height="14" fill="white"
                                                transform="translate(0.746094 0.169983)" />
                                        </clipPath>
                                    </defs>
                                </svg>


                            </div>
                        </div>
                        <div class="frame-1000001642">
                            <div class="frame-1000001497">
                                @if ($draft_request->vehicle_type == 'car')
                                <x-icons.car />
                                @else
                                <x-icons.bike />
                                @endif
                                <div class="bmw">BMW</div>
                            </div>
                            <div class="frame-1000001499">
                                <div class="total-00-00">Total: 00.00</div>
                                <div class="due-00-00">Due: 00.00</div>
                            </div>
                        </div>
                        <div class="head">
                            <div class="frame-1000005256">
                                <div class="frame-10000016422">
                                    <div class="frame-1000005257">
                                        <div class="garage">
                                            <span>
                                                <span class="garage-span">g</span>
                                                <span class="garage-span">arage:</span>
                                            </span>
                                        </div>
                                        <div class="motor">{{ $draft_request->mechanic->name }}</div>
                                    </div>
                                </div>
                                <div class="frame-1000001641">
                                    <div class="frame-1000005257">
                                        <div class="driver">Driver:</div>
                                        <div class="ahmed-mohamed">{{ $draft_request->driver?->name??"" }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-1000005262">
                        <div class="group-1000002307">
                            <div class="rectangle-18"></div>

                        </div>
                        <div class="frame-1000005258">
                            <div class="progress">Progress</div>
                            <div class="_30">0%</div>
                        </div>
                    </div>
                    <div class="frame-1000005261">
                        <div class="frame-1000005255">
                            <div class="frame-1000005254">
                                <img class="ellipse-9" src="ellipse-90.png" />
                                <img class="ellipse-10" src="ellipse-100.png" />
                            </div>
                            <div class="group-1000002308">
                                <div class="ellipse-4"></div>
                                <img class="akar-icons-plus" src="akar-icons-plus0.svg" />
                            </div>
                        </div>
                        <div class="frame-1000005253">
                            <div class="_25-days-left">25 days left</div>
                        </div>
                    </div>
                    <div class="frame-1000005263">
                        <div class="line-1"></div>
                        <div class="frame-1000005260">
                            <div class="nov-26-2025">Nov 26, 2025</div>
                            <div class="nov-26-2025">Nov 26, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="group-20-3"></div>
            </div>
        </a>
        @endforeach
        {{ $groupedRequests['draft']->appends($_GET)->links()}}
    </div>

    <div class="work-order-row">
        <span class="work-order-row-header">{{ __('global.in_progress') }}</span>

        @foreach ($groupedRequests['in_progress'] as $in_progress_request )

        <a href="{{ route('admin.work_orders.show',['id'=>$in_progress_request->id]) }}">

            <div class="work-order-card">
                <div class="rectangle-132"></div>
                <div class="frame-1000005259">
                    <div class="frame-1000005252">
                        <div class="frame-1000005251">
                            <div class="w-o-123-36-52705">{{ $in_progress_request->code() }}</div>
                            <div class="frame-1000001640">

                                <svg width="37" height="15" viewBox="0 0 37 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_15_2488)">
                                        <path
                                            d="M7.23587 2.5033C7.13917 2.5033 7.04644 2.54171 6.97807 2.61008C6.9097 2.67845 6.87128 2.77119 6.87128 2.86788C6.87128 2.96457 6.9097 3.05731 6.97807 3.12568C7.04644 3.19405 7.13917 3.23246 7.23587 3.23246H8.21295C8.41041 3.23246 8.59008 3.34621 8.67437 3.52471L9.61149 5.50513C9.45793 5.44831 9.29543 5.41947 9.1317 5.41996H7.62262C7.17576 5.41995 6.73773 5.54437 6.35761 5.77928C5.97748 6.01418 5.67027 6.3503 5.47041 6.74996L5.11458 7.46163H3.51712C3.1096 7.46172 2.71022 7.57563 2.36398 7.79054C2.01774 8.00545 1.73841 8.3128 1.55749 8.67795C1.37656 9.04309 1.30124 9.45152 1.34 9.85719C1.37876 10.2629 1.53006 10.6496 1.77686 10.9739C2.02365 11.2982 2.35613 11.5471 2.7368 11.6925C3.11747 11.838 3.5312 11.8742 3.93136 11.7971C4.33151 11.7201 4.70218 11.5327 5.00158 11.2563C5.30098 10.9798 5.5172 10.6252 5.62587 10.2325H6.91795C7.25648 10.2325 7.58832 10.1382 7.87629 9.96019C8.16426 9.7822 8.39698 9.52755 8.54837 9.22475L9.06549 8.1908H9.1317C9.41978 8.1909 9.70072 8.1012 9.93544 7.93418C10.1702 7.76716 10.347 7.53112 10.4413 7.25892L10.7233 7.85509C10.2737 8.16915 9.95837 8.64068 9.83996 9.17623C9.72155 9.71178 9.80865 10.2723 10.084 10.7466C10.3593 11.221 10.8028 11.5746 11.3266 11.7374C11.8504 11.9002 12.4162 11.8603 12.9119 11.6256C13.4077 11.3909 13.7971 10.9785 14.0032 10.4702C14.2092 9.96187 14.2168 9.3947 14.0243 8.88107C13.8319 8.36745 13.4536 7.94485 12.9643 7.69702C12.475 7.44919 11.9104 7.39422 11.3825 7.543L11.0625 6.86692C11.1226 6.8745 11.1839 6.8783 11.2463 6.8783H12.34C12.5413 6.8783 12.7046 6.71496 12.7046 6.51371V4.32621C12.7046 4.12496 12.5413 3.96163 12.34 3.96163H11.2463C10.726 3.96163 10.2692 4.23434 10.0111 4.64442L9.33353 3.21263C9.23312 3.00045 9.07453 2.82115 8.8762 2.69558C8.67788 2.57 8.44798 2.50333 8.21324 2.5033H7.23587ZM5.69995 9.5033C5.66802 9.01627 5.47348 8.55407 5.14753 8.1908H8.25028L7.8962 8.89867C7.80537 9.08035 7.66574 9.23314 7.49295 9.33993C7.32017 9.44672 7.12107 9.50329 6.91795 9.5033H5.69995ZM3.51712 8.1908C3.90389 8.1908 4.27482 8.34444 4.54831 8.61793C4.82181 8.89142 4.97545 9.26235 4.97545 9.64913C4.97545 10.0359 4.82181 10.4068 4.54831 10.6803C4.27482 10.9538 3.90389 11.1075 3.51712 11.1075C3.13034 11.1075 2.75941 10.9538 2.48592 10.6803C2.21243 10.4068 2.05878 10.0359 2.05878 9.64913C2.05878 9.26235 2.21243 8.89142 2.48592 8.61793C2.75941 8.34444 3.13034 8.1908 3.51712 8.1908ZM10.5171 9.64913C10.5171 9.1988 10.7213 8.7963 11.0421 8.52855L11.6459 9.80517C11.6664 9.84845 11.6952 9.88727 11.7307 9.91942C11.7662 9.95156 11.8076 9.9764 11.8527 9.99252C11.8978 10.0086 11.9457 10.0157 11.9935 10.0133C12.0413 10.011 12.0882 9.9992 12.1315 9.97871C12.1748 9.95822 12.2136 9.9294 12.2457 9.89391C12.2779 9.85841 12.3027 9.81694 12.3188 9.77184C12.335 9.72675 12.342 9.67892 12.3397 9.63109C12.3373 9.58326 12.3255 9.53637 12.305 9.49309L11.7013 8.21646C11.7901 8.19955 11.8815 8.19099 11.9755 8.1908C12.2639 8.1908 12.5458 8.27633 12.7857 8.43657C13.0255 8.59681 13.2124 8.82457 13.3228 9.09105C13.4332 9.35752 13.462 9.65075 13.4058 9.93364C13.3495 10.2165 13.2106 10.4764 13.0066 10.6803C12.8027 10.8843 12.5428 11.0232 12.26 11.0794C11.9771 11.1357 11.6838 11.1068 11.4174 10.9965C11.1509 10.8861 10.9231 10.6992 10.7629 10.4593C10.6026 10.2195 10.5171 9.93756 10.5171 9.64913ZM8.84791 7.46163H5.93008L6.12258 7.07605C6.26188 6.7975 6.476 6.56325 6.74094 6.39953C7.00588 6.23582 7.31118 6.14911 7.62262 6.14913H9.1317C9.30575 6.14913 9.47267 6.21827 9.59574 6.34134C9.71881 6.46441 9.78795 6.63133 9.78795 6.80538C9.78795 6.97943 9.71881 7.14635 9.59574 7.26942C9.47267 7.39249 9.30575 7.46163 9.1317 7.46163H8.84791ZM11.2463 4.6908H11.9755V6.14913H11.2463C11.0529 6.14913 10.8674 6.07231 10.7307 5.93556C10.5939 5.79882 10.5171 5.61335 10.5171 5.41996C10.5171 5.22658 10.5939 5.04111 10.7307 4.90436C10.8674 4.76762 11.0529 4.6908 11.2463 4.6908Z"
                                            fill="#767676" />
                                    </g>
                                    <path
                                        d="M33.0501 5.85748L32.932 5.81548L31.9388 3.95348C31.7523 3.60356 31.4742 3.31093 31.1342 3.10687C30.7942 2.90281 30.4051 2.795 30.0086 2.79498H27.5078C27.0486 2.79496 26.601 2.93947 26.2285 3.20802C25.856 3.47657 25.5775 3.85554 25.4323 4.29123L24.959 5.71136C24.5624 5.87852 24.2239 6.15895 23.9859 6.51755C23.748 6.87615 23.621 7.29698 23.6211 7.72736V8.70123C23.6211 9.32248 23.9912 9.85623 24.5223 10.0969C24.5911 10.4909 24.7928 10.8496 25.0939 11.113C25.395 11.3764 25.7772 11.5287 26.1769 11.5446C26.5766 11.5605 26.9697 11.4389 27.2907 11.2001C27.6117 10.9614 27.8412 10.6199 27.941 10.2325H31.5512C31.651 10.6199 31.8805 10.9614 32.2015 11.2001C32.5225 11.4389 32.9156 11.5605 33.3153 11.5446C33.715 11.5287 34.0972 11.3764 34.3983 11.113C34.6993 10.8496 34.9011 10.4909 34.9698 10.0969C35.2384 9.97562 35.4663 9.77945 35.6262 9.5319C35.7861 9.28434 35.8711 8.99592 35.8711 8.70123V8.40461C35.871 7.95304 35.7312 7.51256 35.4708 7.14361C35.2105 6.77467 34.8423 6.49535 34.4168 6.34398L33.0956 5.87411V5.85748H33.0501ZM27.5078 3.66998H28.4336V5.85748H25.8322L26.2618 4.56773C26.349 4.3062 26.5162 4.07874 26.7398 3.9176C26.9635 3.75646 27.2322 3.66982 27.5078 3.66998ZM29.3086 3.66998H30.0086C30.2465 3.6699 30.48 3.7345 30.6841 3.85687C30.8881 3.97925 31.0551 4.15479 31.1671 4.36473L31.9633 5.85748H29.3086V3.66998ZM32.8987 6.73248L34.1237 7.16823C34.379 7.25908 34.5998 7.42669 34.756 7.64805C34.9122 7.86941 34.9961 8.13369 34.9961 8.40461V8.70123C34.9961 8.85436 34.9436 8.99523 34.8561 9.10723C34.7128 8.77082 34.4677 8.48776 34.1552 8.2978C33.8427 8.10784 33.4786 8.02054 33.114 8.04815C32.7494 8.07576 32.4025 8.2169 32.1222 8.45174C31.8419 8.68658 31.6423 9.00332 31.5512 9.35748H27.941C27.8499 9.00332 27.6502 8.68658 27.3699 8.45174C27.0896 8.2169 26.7428 8.07576 26.3782 8.04815C26.0136 8.02054 25.6495 8.10784 25.337 8.2978C25.0245 8.48776 24.7794 8.77082 24.6361 9.10723C24.5452 8.99143 24.4959 8.84844 24.4961 8.70123V7.72736C24.4961 7.33361 24.6711 6.97486 24.9511 6.73248H32.8987ZM25.3711 9.79498C25.3711 9.56292 25.4633 9.34036 25.6274 9.17626C25.7915 9.01217 26.014 8.91998 26.2461 8.91998C26.4782 8.91998 26.7007 9.01217 26.8648 9.17626C27.0289 9.34036 27.1211 9.56292 27.1211 9.79498C27.1211 10.027 27.0289 10.2496 26.8648 10.4137C26.7007 10.5778 26.4782 10.67 26.2461 10.67C26.014 10.67 25.7915 10.5778 25.6274 10.4137C25.4633 10.2496 25.3711 10.027 25.3711 9.79498ZM33.2461 8.91998C33.4782 8.91998 33.7007 9.01217 33.8648 9.17626C34.0289 9.34036 34.1211 9.56292 34.1211 9.79498C34.1211 10.027 34.0289 10.2496 33.8648 10.4137C33.7007 10.5778 33.4782 10.67 33.2461 10.67C33.014 10.67 32.7915 10.5778 32.6274 10.4137C32.4633 10.2496 32.3711 10.027 32.3711 9.79498C32.3711 9.56292 32.4633 9.34036 32.6274 9.17626C32.7915 9.01217 33.014 8.91998 33.2461 8.91998Z"
                                        fill="#396FFD" />
                                    <defs>
                                        <clipPath id="clip0_15_2488">
                                            <rect width="14" height="14" fill="white"
                                                transform="translate(0.746094 0.169983)" />
                                        </clipPath>
                                    </defs>
                                </svg>


                            </div>
                        </div>
                        <div class="frame-1000001642">
                            <div class="frame-1000001497">
                                @if ($in_progress_request->vehicle_type == 'car')
                                <x-icons.car />
                                @else
                                <x-icons.bike />
                                @endif
                                <div class="bmw">BMW</div>
                            </div>
                            <div class="frame-1000001499">
                                <div class="total-00-00">Total: 00.00</div>
                                <div class="due-00-00">Due: 00.00</div>
                            </div>
                        </div>
                        <div class="head">
                            <div class="frame-1000005256">
                                <div class="frame-10000016422">
                                    <div class="frame-1000005257">
                                        <div class="garage">
                                            <span>
                                                <span class="garage-span">g</span>
                                                <span class="garage-span">arage:</span>
                                            </span>
                                        </div>
                                        <div class="motor">{{ $in_progress_request->mechanic->name }}</div>
                                    </div>
                                </div>
                                <div class="frame-1000001641">
                                    <div class="frame-1000005257">
                                        <div class="driver">Driver:</div>
                                        <div class="ahmed-mohamed">{{ $in_progress_request->driver?->name }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-1000005262">
                        <div class="group-1000002307">
                            <div class="rectangle-18"></div>
                            {{-- <div class="rectangle-19"></div> --}}
                            <div class="rectangle-19"
                                style="width: {{ $in_progress_request->work_order_status->percentage() }}%"></div>

                        </div>
                        <div class="frame-1000005258">
                            <div class="progress">Progress</div>
                            <div class="_30">{{ $in_progress_request->work_order_status->percentage() }}%</div>
                        </div>
                    </div>
                    <div class="frame-1000005261">
                        <div class="frame-1000005255">
                            <div class="frame-1000005254">
                                <img class="ellipse-9" src="ellipse-93.png" />
                                <img class="ellipse-10" src="ellipse-103.png" />
                            </div>
                            <div class="group-1000002308">
                                <div class="ellipse-42"></div>
                                <img class="akar-icons-plus4" src="akar-icons-plus3.svg" />
                            </div>
                        </div>
                        <div class="frame-10000052532">
                            <div class="_25-days-left2">25 days left</div>
                        </div>
                    </div>
                    <div class="frame-1000005263">
                        <div class="line-1"></div>
                        <div class="frame-1000005260">
                            <div class="nov-26-2025">Nov 26, 2025</div>
                            <div class="nov-26-2025">Nov 26, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="group-20-3"></div>
            </div>

        </a>
        @endforeach
        {{ $groupedRequests['in_progress']->appends($_GET)->links()}}

    </div>
    <div class="work-order-row">
        <span class="work-order-row-header">{{ __('global.on_hold') }}</span>

        @foreach ($groupedRequests['on_hold'] as $on_hold_request )
        <a href="{{ route('admin.work_orders.show',['id'=>$on_hold_request->id]) }}">

        <div class="work-order-card">
            <div class="rectangle-133"></div>
            <div class="frame-1000005259">
                <div class="frame-1000005252">
                    <div class="frame-1000005251">
                        <div class="w-o-123-36-52705">{{ $on_hold_request->code() }}</div>
                        <div class="frame-1000001640">

                            <svg width="37" height="15" viewBox="0 0 37 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_15_2488)">
                                    <path
                                        d="M7.23587 2.5033C7.13917 2.5033 7.04644 2.54171 6.97807 2.61008C6.9097 2.67845 6.87128 2.77119 6.87128 2.86788C6.87128 2.96457 6.9097 3.05731 6.97807 3.12568C7.04644 3.19405 7.13917 3.23246 7.23587 3.23246H8.21295C8.41041 3.23246 8.59008 3.34621 8.67437 3.52471L9.61149 5.50513C9.45793 5.44831 9.29543 5.41947 9.1317 5.41996H7.62262C7.17576 5.41995 6.73773 5.54437 6.35761 5.77928C5.97748 6.01418 5.67027 6.3503 5.47041 6.74996L5.11458 7.46163H3.51712C3.1096 7.46172 2.71022 7.57563 2.36398 7.79054C2.01774 8.00545 1.73841 8.3128 1.55749 8.67795C1.37656 9.04309 1.30124 9.45152 1.34 9.85719C1.37876 10.2629 1.53006 10.6496 1.77686 10.9739C2.02365 11.2982 2.35613 11.5471 2.7368 11.6925C3.11747 11.838 3.5312 11.8742 3.93136 11.7971C4.33151 11.7201 4.70218 11.5327 5.00158 11.2563C5.30098 10.9798 5.5172 10.6252 5.62587 10.2325H6.91795C7.25648 10.2325 7.58832 10.1382 7.87629 9.96019C8.16426 9.7822 8.39698 9.52755 8.54837 9.22475L9.06549 8.1908H9.1317C9.41978 8.1909 9.70072 8.1012 9.93544 7.93418C10.1702 7.76716 10.347 7.53112 10.4413 7.25892L10.7233 7.85509C10.2737 8.16915 9.95837 8.64068 9.83996 9.17623C9.72155 9.71178 9.80865 10.2723 10.084 10.7466C10.3593 11.221 10.8028 11.5746 11.3266 11.7374C11.8504 11.9002 12.4162 11.8603 12.9119 11.6256C13.4077 11.3909 13.7971 10.9785 14.0032 10.4702C14.2092 9.96187 14.2168 9.3947 14.0243 8.88107C13.8319 8.36745 13.4536 7.94485 12.9643 7.69702C12.475 7.44919 11.9104 7.39422 11.3825 7.543L11.0625 6.86692C11.1226 6.8745 11.1839 6.8783 11.2463 6.8783H12.34C12.5413 6.8783 12.7046 6.71496 12.7046 6.51371V4.32621C12.7046 4.12496 12.5413 3.96163 12.34 3.96163H11.2463C10.726 3.96163 10.2692 4.23434 10.0111 4.64442L9.33353 3.21263C9.23312 3.00045 9.07453 2.82115 8.8762 2.69558C8.67788 2.57 8.44798 2.50333 8.21324 2.5033H7.23587ZM5.69995 9.5033C5.66802 9.01627 5.47348 8.55407 5.14753 8.1908H8.25028L7.8962 8.89867C7.80537 9.08035 7.66574 9.23314 7.49295 9.33993C7.32017 9.44672 7.12107 9.50329 6.91795 9.5033H5.69995ZM3.51712 8.1908C3.90389 8.1908 4.27482 8.34444 4.54831 8.61793C4.82181 8.89142 4.97545 9.26235 4.97545 9.64913C4.97545 10.0359 4.82181 10.4068 4.54831 10.6803C4.27482 10.9538 3.90389 11.1075 3.51712 11.1075C3.13034 11.1075 2.75941 10.9538 2.48592 10.6803C2.21243 10.4068 2.05878 10.0359 2.05878 9.64913C2.05878 9.26235 2.21243 8.89142 2.48592 8.61793C2.75941 8.34444 3.13034 8.1908 3.51712 8.1908ZM10.5171 9.64913C10.5171 9.1988 10.7213 8.7963 11.0421 8.52855L11.6459 9.80517C11.6664 9.84845 11.6952 9.88727 11.7307 9.91942C11.7662 9.95156 11.8076 9.9764 11.8527 9.99252C11.8978 10.0086 11.9457 10.0157 11.9935 10.0133C12.0413 10.011 12.0882 9.9992 12.1315 9.97871C12.1748 9.95822 12.2136 9.9294 12.2457 9.89391C12.2779 9.85841 12.3027 9.81694 12.3188 9.77184C12.335 9.72675 12.342 9.67892 12.3397 9.63109C12.3373 9.58326 12.3255 9.53637 12.305 9.49309L11.7013 8.21646C11.7901 8.19955 11.8815 8.19099 11.9755 8.1908C12.2639 8.1908 12.5458 8.27633 12.7857 8.43657C13.0255 8.59681 13.2124 8.82457 13.3228 9.09105C13.4332 9.35752 13.462 9.65075 13.4058 9.93364C13.3495 10.2165 13.2106 10.4764 13.0066 10.6803C12.8027 10.8843 12.5428 11.0232 12.26 11.0794C11.9771 11.1357 11.6838 11.1068 11.4174 10.9965C11.1509 10.8861 10.9231 10.6992 10.7629 10.4593C10.6026 10.2195 10.5171 9.93756 10.5171 9.64913ZM8.84791 7.46163H5.93008L6.12258 7.07605C6.26188 6.7975 6.476 6.56325 6.74094 6.39953C7.00588 6.23582 7.31118 6.14911 7.62262 6.14913H9.1317C9.30575 6.14913 9.47267 6.21827 9.59574 6.34134C9.71881 6.46441 9.78795 6.63133 9.78795 6.80538C9.78795 6.97943 9.71881 7.14635 9.59574 7.26942C9.47267 7.39249 9.30575 7.46163 9.1317 7.46163H8.84791ZM11.2463 4.6908H11.9755V6.14913H11.2463C11.0529 6.14913 10.8674 6.07231 10.7307 5.93556C10.5939 5.79882 10.5171 5.61335 10.5171 5.41996C10.5171 5.22658 10.5939 5.04111 10.7307 4.90436C10.8674 4.76762 11.0529 4.6908 11.2463 4.6908Z"
                                        fill="#767676" />
                                </g>
                                <path
                                    d="M33.0501 5.85748L32.932 5.81548L31.9388 3.95348C31.7523 3.60356 31.4742 3.31093 31.1342 3.10687C30.7942 2.90281 30.4051 2.795 30.0086 2.79498H27.5078C27.0486 2.79496 26.601 2.93947 26.2285 3.20802C25.856 3.47657 25.5775 3.85554 25.4323 4.29123L24.959 5.71136C24.5624 5.87852 24.2239 6.15895 23.9859 6.51755C23.748 6.87615 23.621 7.29698 23.6211 7.72736V8.70123C23.6211 9.32248 23.9912 9.85623 24.5223 10.0969C24.5911 10.4909 24.7928 10.8496 25.0939 11.113C25.395 11.3764 25.7772 11.5287 26.1769 11.5446C26.5766 11.5605 26.9697 11.4389 27.2907 11.2001C27.6117 10.9614 27.8412 10.6199 27.941 10.2325H31.5512C31.651 10.6199 31.8805 10.9614 32.2015 11.2001C32.5225 11.4389 32.9156 11.5605 33.3153 11.5446C33.715 11.5287 34.0972 11.3764 34.3983 11.113C34.6993 10.8496 34.9011 10.4909 34.9698 10.0969C35.2384 9.97562 35.4663 9.77945 35.6262 9.5319C35.7861 9.28434 35.8711 8.99592 35.8711 8.70123V8.40461C35.871 7.95304 35.7312 7.51256 35.4708 7.14361C35.2105 6.77467 34.8423 6.49535 34.4168 6.34398L33.0956 5.87411V5.85748H33.0501ZM27.5078 3.66998H28.4336V5.85748H25.8322L26.2618 4.56773C26.349 4.3062 26.5162 4.07874 26.7398 3.9176C26.9635 3.75646 27.2322 3.66982 27.5078 3.66998ZM29.3086 3.66998H30.0086C30.2465 3.6699 30.48 3.7345 30.6841 3.85687C30.8881 3.97925 31.0551 4.15479 31.1671 4.36473L31.9633 5.85748H29.3086V3.66998ZM32.8987 6.73248L34.1237 7.16823C34.379 7.25908 34.5998 7.42669 34.756 7.64805C34.9122 7.86941 34.9961 8.13369 34.9961 8.40461V8.70123C34.9961 8.85436 34.9436 8.99523 34.8561 9.10723C34.7128 8.77082 34.4677 8.48776 34.1552 8.2978C33.8427 8.10784 33.4786 8.02054 33.114 8.04815C32.7494 8.07576 32.4025 8.2169 32.1222 8.45174C31.8419 8.68658 31.6423 9.00332 31.5512 9.35748H27.941C27.8499 9.00332 27.6502 8.68658 27.3699 8.45174C27.0896 8.2169 26.7428 8.07576 26.3782 8.04815C26.0136 8.02054 25.6495 8.10784 25.337 8.2978C25.0245 8.48776 24.7794 8.77082 24.6361 9.10723C24.5452 8.99143 24.4959 8.84844 24.4961 8.70123V7.72736C24.4961 7.33361 24.6711 6.97486 24.9511 6.73248H32.8987ZM25.3711 9.79498C25.3711 9.56292 25.4633 9.34036 25.6274 9.17626C25.7915 9.01217 26.014 8.91998 26.2461 8.91998C26.4782 8.91998 26.7007 9.01217 26.8648 9.17626C27.0289 9.34036 27.1211 9.56292 27.1211 9.79498C27.1211 10.027 27.0289 10.2496 26.8648 10.4137C26.7007 10.5778 26.4782 10.67 26.2461 10.67C26.014 10.67 25.7915 10.5778 25.6274 10.4137C25.4633 10.2496 25.3711 10.027 25.3711 9.79498ZM33.2461 8.91998C33.4782 8.91998 33.7007 9.01217 33.8648 9.17626C34.0289 9.34036 34.1211 9.56292 34.1211 9.79498C34.1211 10.027 34.0289 10.2496 33.8648 10.4137C33.7007 10.5778 33.4782 10.67 33.2461 10.67C33.014 10.67 32.7915 10.5778 32.6274 10.4137C32.4633 10.2496 32.3711 10.027 32.3711 9.79498C32.3711 9.56292 32.4633 9.34036 32.6274 9.17626C32.7915 9.01217 33.014 8.91998 33.2461 8.91998Z"
                                    fill="#396FFD" />
                                <defs>
                                    <clipPath id="clip0_15_2488">
                                        <rect width="14" height="14" fill="white"
                                            transform="translate(0.746094 0.169983)" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </div>
                    </div>
                    <div class="frame-1000001642">
                        <div class="frame-1000001497">
                            @if ($draft_request->vehicle_type == 'car')
                            <x-icons.car />
                            @else
                            <x-icons.bike />
                            @endif
                            <div class="bmw">BMW</div>
                        </div>
                        <div class="frame-1000001499">
                            <div class="total-00-00">Total: 00.00</div>
                            <div class="due-00-00">Due: 00.00</div>
                        </div>
                    </div>
                    <div class="head">
                        <div class="frame-1000005256">
                            <div class="frame-10000016422">
                                <div class="frame-1000005257">
                                    <div class="garage">
                                        <span>
                                            <span class="garage-span">g</span>
                                            <span class="garage-span">arage:</span>
                                        </span>
                                    </div>
                                    <div class="motor">{{ $on_hold_request->mechanic->name }}</div>
                                </div>
                            </div>
                            <div class="frame-1000001641">
                                <div class="frame-1000005257">
                                    <div class="driver">Driver:</div>
                                    <div class="ahmed-mohamed">{{ $on_hold_request->driver?->name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-1000005262">
                    <div class="group-1000002307">
                        <div class="rectangle-18"></div>

                        <div class="rectangle-192"
                            style="width: {{ $on_hold_request->work_order_status->percentage() }}%"></div>
                    </div>
                    <div class="frame-1000005258">
                        <div class="progress">Progress</div>
                        <div class="_30">{{ $on_hold_request->work_order_status->percentage() }}%</div>
                    </div>
                </div>
                <div class="frame-1000005261">
                    <div class="frame-1000005255">
                        <div class="frame-1000005254">
                            <img class="ellipse-9" src="ellipse-96.png" />
                            <img class="ellipse-10" src="ellipse-106.png" />
                        </div>
                        <div class="group-1000002308">
                            <div class="ellipse-42"></div>
                            <img class="akar-icons-plus7" src="akar-icons-plus6.svg" />
                        </div>
                    </div>
                    <div class="frame-10000052533">
                        <div class="_25-days-left3">25 days left</div>
                    </div>
                </div>
                <div class="frame-1000005263">
                    <div class="line-1"></div>
                    <div class="frame-1000005260">
                        <div class="nov-26-2025">Nov 26, 2025</div>
                        <div class="nov-26-2025">Nov 26, 2025</div>
                    </div>
                </div>
            </div>
            <div class="group-20-3"></div>
        </div>
        </a>
        {{ $groupedRequests['on_hold']->appends($_GET)->links()}}

        @endforeach
    </div>
    <div class="work-order-row">
        <span class="work-order-row-header">{{ __('global.ready') }}</span>

        @foreach ($groupedRequests['ready'] as $ready_request )
        <a href="{{ route('admin.work_orders.show',['id'=>$ready_request->id]) }}">

        <div class="work-order-card">
            <div class="rectangle-134"></div>
            <div class="frame-1000005259">
                <div class="frame-1000005252">
                    <div class="frame-1000005251">
                        <div class="w-o-123-36-52705">{{ $ready_request->code() }}</div>
                        <div class="frame-1000001640">

                            <svg width="37" height="15" viewBox="0 0 37 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_15_2488)">
                                    <path
                                        d="M7.23587 2.5033C7.13917 2.5033 7.04644 2.54171 6.97807 2.61008C6.9097 2.67845 6.87128 2.77119 6.87128 2.86788C6.87128 2.96457 6.9097 3.05731 6.97807 3.12568C7.04644 3.19405 7.13917 3.23246 7.23587 3.23246H8.21295C8.41041 3.23246 8.59008 3.34621 8.67437 3.52471L9.61149 5.50513C9.45793 5.44831 9.29543 5.41947 9.1317 5.41996H7.62262C7.17576 5.41995 6.73773 5.54437 6.35761 5.77928C5.97748 6.01418 5.67027 6.3503 5.47041 6.74996L5.11458 7.46163H3.51712C3.1096 7.46172 2.71022 7.57563 2.36398 7.79054C2.01774 8.00545 1.73841 8.3128 1.55749 8.67795C1.37656 9.04309 1.30124 9.45152 1.34 9.85719C1.37876 10.2629 1.53006 10.6496 1.77686 10.9739C2.02365 11.2982 2.35613 11.5471 2.7368 11.6925C3.11747 11.838 3.5312 11.8742 3.93136 11.7971C4.33151 11.7201 4.70218 11.5327 5.00158 11.2563C5.30098 10.9798 5.5172 10.6252 5.62587 10.2325H6.91795C7.25648 10.2325 7.58832 10.1382 7.87629 9.96019C8.16426 9.7822 8.39698 9.52755 8.54837 9.22475L9.06549 8.1908H9.1317C9.41978 8.1909 9.70072 8.1012 9.93544 7.93418C10.1702 7.76716 10.347 7.53112 10.4413 7.25892L10.7233 7.85509C10.2737 8.16915 9.95837 8.64068 9.83996 9.17623C9.72155 9.71178 9.80865 10.2723 10.084 10.7466C10.3593 11.221 10.8028 11.5746 11.3266 11.7374C11.8504 11.9002 12.4162 11.8603 12.9119 11.6256C13.4077 11.3909 13.7971 10.9785 14.0032 10.4702C14.2092 9.96187 14.2168 9.3947 14.0243 8.88107C13.8319 8.36745 13.4536 7.94485 12.9643 7.69702C12.475 7.44919 11.9104 7.39422 11.3825 7.543L11.0625 6.86692C11.1226 6.8745 11.1839 6.8783 11.2463 6.8783H12.34C12.5413 6.8783 12.7046 6.71496 12.7046 6.51371V4.32621C12.7046 4.12496 12.5413 3.96163 12.34 3.96163H11.2463C10.726 3.96163 10.2692 4.23434 10.0111 4.64442L9.33353 3.21263C9.23312 3.00045 9.07453 2.82115 8.8762 2.69558C8.67788 2.57 8.44798 2.50333 8.21324 2.5033H7.23587ZM5.69995 9.5033C5.66802 9.01627 5.47348 8.55407 5.14753 8.1908H8.25028L7.8962 8.89867C7.80537 9.08035 7.66574 9.23314 7.49295 9.33993C7.32017 9.44672 7.12107 9.50329 6.91795 9.5033H5.69995ZM3.51712 8.1908C3.90389 8.1908 4.27482 8.34444 4.54831 8.61793C4.82181 8.89142 4.97545 9.26235 4.97545 9.64913C4.97545 10.0359 4.82181 10.4068 4.54831 10.6803C4.27482 10.9538 3.90389 11.1075 3.51712 11.1075C3.13034 11.1075 2.75941 10.9538 2.48592 10.6803C2.21243 10.4068 2.05878 10.0359 2.05878 9.64913C2.05878 9.26235 2.21243 8.89142 2.48592 8.61793C2.75941 8.34444 3.13034 8.1908 3.51712 8.1908ZM10.5171 9.64913C10.5171 9.1988 10.7213 8.7963 11.0421 8.52855L11.6459 9.80517C11.6664 9.84845 11.6952 9.88727 11.7307 9.91942C11.7662 9.95156 11.8076 9.9764 11.8527 9.99252C11.8978 10.0086 11.9457 10.0157 11.9935 10.0133C12.0413 10.011 12.0882 9.9992 12.1315 9.97871C12.1748 9.95822 12.2136 9.9294 12.2457 9.89391C12.2779 9.85841 12.3027 9.81694 12.3188 9.77184C12.335 9.72675 12.342 9.67892 12.3397 9.63109C12.3373 9.58326 12.3255 9.53637 12.305 9.49309L11.7013 8.21646C11.7901 8.19955 11.8815 8.19099 11.9755 8.1908C12.2639 8.1908 12.5458 8.27633 12.7857 8.43657C13.0255 8.59681 13.2124 8.82457 13.3228 9.09105C13.4332 9.35752 13.462 9.65075 13.4058 9.93364C13.3495 10.2165 13.2106 10.4764 13.0066 10.6803C12.8027 10.8843 12.5428 11.0232 12.26 11.0794C11.9771 11.1357 11.6838 11.1068 11.4174 10.9965C11.1509 10.8861 10.9231 10.6992 10.7629 10.4593C10.6026 10.2195 10.5171 9.93756 10.5171 9.64913ZM8.84791 7.46163H5.93008L6.12258 7.07605C6.26188 6.7975 6.476 6.56325 6.74094 6.39953C7.00588 6.23582 7.31118 6.14911 7.62262 6.14913H9.1317C9.30575 6.14913 9.47267 6.21827 9.59574 6.34134C9.71881 6.46441 9.78795 6.63133 9.78795 6.80538C9.78795 6.97943 9.71881 7.14635 9.59574 7.26942C9.47267 7.39249 9.30575 7.46163 9.1317 7.46163H8.84791ZM11.2463 4.6908H11.9755V6.14913H11.2463C11.0529 6.14913 10.8674 6.07231 10.7307 5.93556C10.5939 5.79882 10.5171 5.61335 10.5171 5.41996C10.5171 5.22658 10.5939 5.04111 10.7307 4.90436C10.8674 4.76762 11.0529 4.6908 11.2463 4.6908Z"
                                        fill="#767676" />
                                </g>
                                <path
                                    d="M33.0501 5.85748L32.932 5.81548L31.9388 3.95348C31.7523 3.60356 31.4742 3.31093 31.1342 3.10687C30.7942 2.90281 30.4051 2.795 30.0086 2.79498H27.5078C27.0486 2.79496 26.601 2.93947 26.2285 3.20802C25.856 3.47657 25.5775 3.85554 25.4323 4.29123L24.959 5.71136C24.5624 5.87852 24.2239 6.15895 23.9859 6.51755C23.748 6.87615 23.621 7.29698 23.6211 7.72736V8.70123C23.6211 9.32248 23.9912 9.85623 24.5223 10.0969C24.5911 10.4909 24.7928 10.8496 25.0939 11.113C25.395 11.3764 25.7772 11.5287 26.1769 11.5446C26.5766 11.5605 26.9697 11.4389 27.2907 11.2001C27.6117 10.9614 27.8412 10.6199 27.941 10.2325H31.5512C31.651 10.6199 31.8805 10.9614 32.2015 11.2001C32.5225 11.4389 32.9156 11.5605 33.3153 11.5446C33.715 11.5287 34.0972 11.3764 34.3983 11.113C34.6993 10.8496 34.9011 10.4909 34.9698 10.0969C35.2384 9.97562 35.4663 9.77945 35.6262 9.5319C35.7861 9.28434 35.8711 8.99592 35.8711 8.70123V8.40461C35.871 7.95304 35.7312 7.51256 35.4708 7.14361C35.2105 6.77467 34.8423 6.49535 34.4168 6.34398L33.0956 5.87411V5.85748H33.0501ZM27.5078 3.66998H28.4336V5.85748H25.8322L26.2618 4.56773C26.349 4.3062 26.5162 4.07874 26.7398 3.9176C26.9635 3.75646 27.2322 3.66982 27.5078 3.66998ZM29.3086 3.66998H30.0086C30.2465 3.6699 30.48 3.7345 30.6841 3.85687C30.8881 3.97925 31.0551 4.15479 31.1671 4.36473L31.9633 5.85748H29.3086V3.66998ZM32.8987 6.73248L34.1237 7.16823C34.379 7.25908 34.5998 7.42669 34.756 7.64805C34.9122 7.86941 34.9961 8.13369 34.9961 8.40461V8.70123C34.9961 8.85436 34.9436 8.99523 34.8561 9.10723C34.7128 8.77082 34.4677 8.48776 34.1552 8.2978C33.8427 8.10784 33.4786 8.02054 33.114 8.04815C32.7494 8.07576 32.4025 8.2169 32.1222 8.45174C31.8419 8.68658 31.6423 9.00332 31.5512 9.35748H27.941C27.8499 9.00332 27.6502 8.68658 27.3699 8.45174C27.0896 8.2169 26.7428 8.07576 26.3782 8.04815C26.0136 8.02054 25.6495 8.10784 25.337 8.2978C25.0245 8.48776 24.7794 8.77082 24.6361 9.10723C24.5452 8.99143 24.4959 8.84844 24.4961 8.70123V7.72736C24.4961 7.33361 24.6711 6.97486 24.9511 6.73248H32.8987ZM25.3711 9.79498C25.3711 9.56292 25.4633 9.34036 25.6274 9.17626C25.7915 9.01217 26.014 8.91998 26.2461 8.91998C26.4782 8.91998 26.7007 9.01217 26.8648 9.17626C27.0289 9.34036 27.1211 9.56292 27.1211 9.79498C27.1211 10.027 27.0289 10.2496 26.8648 10.4137C26.7007 10.5778 26.4782 10.67 26.2461 10.67C26.014 10.67 25.7915 10.5778 25.6274 10.4137C25.4633 10.2496 25.3711 10.027 25.3711 9.79498ZM33.2461 8.91998C33.4782 8.91998 33.7007 9.01217 33.8648 9.17626C34.0289 9.34036 34.1211 9.56292 34.1211 9.79498C34.1211 10.027 34.0289 10.2496 33.8648 10.4137C33.7007 10.5778 33.4782 10.67 33.2461 10.67C33.014 10.67 32.7915 10.5778 32.6274 10.4137C32.4633 10.2496 32.3711 10.027 32.3711 9.79498C32.3711 9.56292 32.4633 9.34036 32.6274 9.17626C32.7915 9.01217 33.014 8.91998 33.2461 8.91998Z"
                                    fill="#396FFD" />
                                <defs>
                                    <clipPath id="clip0_15_2488">
                                        <rect width="14" height="14" fill="white"
                                            transform="translate(0.746094 0.169983)" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </div>
                    </div>
                    <div class="frame-1000001642">
                        <div class="frame-1000001497">
                            @if ($ready_request->vehicle_type == 'car')
                            <x-icons.car />
                            @else
                            <x-icons.bike />
                            @endif
                            <div class="bmw">BMW</div>
                        </div>
                        <div class="frame-1000001499">
                            <div class="total-00-00">Total: 00.00</div>
                            <div class="due-00-00">Due: 00.00</div>
                        </div>
                    </div>
                    <div class="head">
                        <div class="frame-1000005256">
                            <div class="frame-10000016422">
                                <div class="frame-1000005257">
                                    <div class="garage">
                                        <span>
                                            <span class="garage-span">g</span>
                                            <span class="garage-span">arage:</span>
                                        </span>
                                    </div>
                                    <div class="motor">{{ $ready_request->mechanic->name }}</div>
                                </div>
                            </div>
                            <div class="frame-1000001641">
                                <div class="frame-1000005257">
                                    <div class="driver">Driver:</div>
                                    <div class="ahmed-mohamed">{{ $ready_request->driver?->name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="frame-1000005262">
                    <div class="group-1000002307">
                        <div class="rectangle-18"></div>
                        <div class="rectangle-193"
                            style="width: {{ $ready_request->work_order_status->percentage() }}%"></div>
                    </div>
                    <div class="frame-1000005258">
                        <div class="progress">Progress</div>
                        <div class="_30">{{ $ready_request->work_order_status->percentage() }}%</div>
                    </div>
                </div>
                <div class="frame-1000005261">
                    <div class="frame-1000005255">
                        <div class="frame-1000005254">
                            <img class="ellipse-9" src="ellipse-99.png" />
                            <img class="ellipse-10" src="ellipse-109.png" />
                        </div>
                        <div class="group-1000002308">
                            <div class="ellipse-42"></div>
                            <img class="akar-icons-plus10" src="akar-icons-plus9.svg" />
                        </div>
                    </div>
                    <div class="frame-10000052534">
                        <div class="_25-days-left4">25 days left</div>
                    </div>
                </div>
                <div class="frame-1000005263">
                    <div class="line-1"></div>
                    <div class="frame-1000005260">
                        <div class="nov-26-2025">Nov 26, 2025</div>
                        <div class="nov-26-2025">Nov 26, 2025</div>
                    </div>
                </div>
            </div>
            <div class="group-20-3"></div>
        </div>
        </a>
        @endforeach
        {{ $groupedRequests['ready']->appends($_GET)->links()}}
    </div>
    <div class="work-order-row">
        <span class="work-order-row-header">{{ __('global.delivered') }}</span>

        @foreach ( $groupedRequests['delivered'] as $delivered_request )
        <a href="{{ route('admin.work_orders.show',['id'=>$delivered_request->id]) }}">

            <div class="work-order-card">
                <div class="rectangle-135"></div>
                <div class="frame-1000005259">
                    <div class="frame-1000005252">
                        <div class="frame-1000005251">
                            <div class="w-o-123-36-52705">{{ $delivered_request->code() }}</div>
                            <div class="frame-1000001640">

                                <svg width="37" height="15" viewBox="0 0 37 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_15_2488)">
                                        <path
                                            d="M7.23587 2.5033C7.13917 2.5033 7.04644 2.54171 6.97807 2.61008C6.9097 2.67845 6.87128 2.77119 6.87128 2.86788C6.87128 2.96457 6.9097 3.05731 6.97807 3.12568C7.04644 3.19405 7.13917 3.23246 7.23587 3.23246H8.21295C8.41041 3.23246 8.59008 3.34621 8.67437 3.52471L9.61149 5.50513C9.45793 5.44831 9.29543 5.41947 9.1317 5.41996H7.62262C7.17576 5.41995 6.73773 5.54437 6.35761 5.77928C5.97748 6.01418 5.67027 6.3503 5.47041 6.74996L5.11458 7.46163H3.51712C3.1096 7.46172 2.71022 7.57563 2.36398 7.79054C2.01774 8.00545 1.73841 8.3128 1.55749 8.67795C1.37656 9.04309 1.30124 9.45152 1.34 9.85719C1.37876 10.2629 1.53006 10.6496 1.77686 10.9739C2.02365 11.2982 2.35613 11.5471 2.7368 11.6925C3.11747 11.838 3.5312 11.8742 3.93136 11.7971C4.33151 11.7201 4.70218 11.5327 5.00158 11.2563C5.30098 10.9798 5.5172 10.6252 5.62587 10.2325H6.91795C7.25648 10.2325 7.58832 10.1382 7.87629 9.96019C8.16426 9.7822 8.39698 9.52755 8.54837 9.22475L9.06549 8.1908H9.1317C9.41978 8.1909 9.70072 8.1012 9.93544 7.93418C10.1702 7.76716 10.347 7.53112 10.4413 7.25892L10.7233 7.85509C10.2737 8.16915 9.95837 8.64068 9.83996 9.17623C9.72155 9.71178 9.80865 10.2723 10.084 10.7466C10.3593 11.221 10.8028 11.5746 11.3266 11.7374C11.8504 11.9002 12.4162 11.8603 12.9119 11.6256C13.4077 11.3909 13.7971 10.9785 14.0032 10.4702C14.2092 9.96187 14.2168 9.3947 14.0243 8.88107C13.8319 8.36745 13.4536 7.94485 12.9643 7.69702C12.475 7.44919 11.9104 7.39422 11.3825 7.543L11.0625 6.86692C11.1226 6.8745 11.1839 6.8783 11.2463 6.8783H12.34C12.5413 6.8783 12.7046 6.71496 12.7046 6.51371V4.32621C12.7046 4.12496 12.5413 3.96163 12.34 3.96163H11.2463C10.726 3.96163 10.2692 4.23434 10.0111 4.64442L9.33353 3.21263C9.23312 3.00045 9.07453 2.82115 8.8762 2.69558C8.67788 2.57 8.44798 2.50333 8.21324 2.5033H7.23587ZM5.69995 9.5033C5.66802 9.01627 5.47348 8.55407 5.14753 8.1908H8.25028L7.8962 8.89867C7.80537 9.08035 7.66574 9.23314 7.49295 9.33993C7.32017 9.44672 7.12107 9.50329 6.91795 9.5033H5.69995ZM3.51712 8.1908C3.90389 8.1908 4.27482 8.34444 4.54831 8.61793C4.82181 8.89142 4.97545 9.26235 4.97545 9.64913C4.97545 10.0359 4.82181 10.4068 4.54831 10.6803C4.27482 10.9538 3.90389 11.1075 3.51712 11.1075C3.13034 11.1075 2.75941 10.9538 2.48592 10.6803C2.21243 10.4068 2.05878 10.0359 2.05878 9.64913C2.05878 9.26235 2.21243 8.89142 2.48592 8.61793C2.75941 8.34444 3.13034 8.1908 3.51712 8.1908ZM10.5171 9.64913C10.5171 9.1988 10.7213 8.7963 11.0421 8.52855L11.6459 9.80517C11.6664 9.84845 11.6952 9.88727 11.7307 9.91942C11.7662 9.95156 11.8076 9.9764 11.8527 9.99252C11.8978 10.0086 11.9457 10.0157 11.9935 10.0133C12.0413 10.011 12.0882 9.9992 12.1315 9.97871C12.1748 9.95822 12.2136 9.9294 12.2457 9.89391C12.2779 9.85841 12.3027 9.81694 12.3188 9.77184C12.335 9.72675 12.342 9.67892 12.3397 9.63109C12.3373 9.58326 12.3255 9.53637 12.305 9.49309L11.7013 8.21646C11.7901 8.19955 11.8815 8.19099 11.9755 8.1908C12.2639 8.1908 12.5458 8.27633 12.7857 8.43657C13.0255 8.59681 13.2124 8.82457 13.3228 9.09105C13.4332 9.35752 13.462 9.65075 13.4058 9.93364C13.3495 10.2165 13.2106 10.4764 13.0066 10.6803C12.8027 10.8843 12.5428 11.0232 12.26 11.0794C11.9771 11.1357 11.6838 11.1068 11.4174 10.9965C11.1509 10.8861 10.9231 10.6992 10.7629 10.4593C10.6026 10.2195 10.5171 9.93756 10.5171 9.64913ZM8.84791 7.46163H5.93008L6.12258 7.07605C6.26188 6.7975 6.476 6.56325 6.74094 6.39953C7.00588 6.23582 7.31118 6.14911 7.62262 6.14913H9.1317C9.30575 6.14913 9.47267 6.21827 9.59574 6.34134C9.71881 6.46441 9.78795 6.63133 9.78795 6.80538C9.78795 6.97943 9.71881 7.14635 9.59574 7.26942C9.47267 7.39249 9.30575 7.46163 9.1317 7.46163H8.84791ZM11.2463 4.6908H11.9755V6.14913H11.2463C11.0529 6.14913 10.8674 6.07231 10.7307 5.93556C10.5939 5.79882 10.5171 5.61335 10.5171 5.41996C10.5171 5.22658 10.5939 5.04111 10.7307 4.90436C10.8674 4.76762 11.0529 4.6908 11.2463 4.6908Z"
                                            fill="#767676" />
                                    </g>
                                    <path
                                        d="M33.0501 5.85748L32.932 5.81548L31.9388 3.95348C31.7523 3.60356 31.4742 3.31093 31.1342 3.10687C30.7942 2.90281 30.4051 2.795 30.0086 2.79498H27.5078C27.0486 2.79496 26.601 2.93947 26.2285 3.20802C25.856 3.47657 25.5775 3.85554 25.4323 4.29123L24.959 5.71136C24.5624 5.87852 24.2239 6.15895 23.9859 6.51755C23.748 6.87615 23.621 7.29698 23.6211 7.72736V8.70123C23.6211 9.32248 23.9912 9.85623 24.5223 10.0969C24.5911 10.4909 24.7928 10.8496 25.0939 11.113C25.395 11.3764 25.7772 11.5287 26.1769 11.5446C26.5766 11.5605 26.9697 11.4389 27.2907 11.2001C27.6117 10.9614 27.8412 10.6199 27.941 10.2325H31.5512C31.651 10.6199 31.8805 10.9614 32.2015 11.2001C32.5225 11.4389 32.9156 11.5605 33.3153 11.5446C33.715 11.5287 34.0972 11.3764 34.3983 11.113C34.6993 10.8496 34.9011 10.4909 34.9698 10.0969C35.2384 9.97562 35.4663 9.77945 35.6262 9.5319C35.7861 9.28434 35.8711 8.99592 35.8711 8.70123V8.40461C35.871 7.95304 35.7312 7.51256 35.4708 7.14361C35.2105 6.77467 34.8423 6.49535 34.4168 6.34398L33.0956 5.87411V5.85748H33.0501ZM27.5078 3.66998H28.4336V5.85748H25.8322L26.2618 4.56773C26.349 4.3062 26.5162 4.07874 26.7398 3.9176C26.9635 3.75646 27.2322 3.66982 27.5078 3.66998ZM29.3086 3.66998H30.0086C30.2465 3.6699 30.48 3.7345 30.6841 3.85687C30.8881 3.97925 31.0551 4.15479 31.1671 4.36473L31.9633 5.85748H29.3086V3.66998ZM32.8987 6.73248L34.1237 7.16823C34.379 7.25908 34.5998 7.42669 34.756 7.64805C34.9122 7.86941 34.9961 8.13369 34.9961 8.40461V8.70123C34.9961 8.85436 34.9436 8.99523 34.8561 9.10723C34.7128 8.77082 34.4677 8.48776 34.1552 8.2978C33.8427 8.10784 33.4786 8.02054 33.114 8.04815C32.7494 8.07576 32.4025 8.2169 32.1222 8.45174C31.8419 8.68658 31.6423 9.00332 31.5512 9.35748H27.941C27.8499 9.00332 27.6502 8.68658 27.3699 8.45174C27.0896 8.2169 26.7428 8.07576 26.3782 8.04815C26.0136 8.02054 25.6495 8.10784 25.337 8.2978C25.0245 8.48776 24.7794 8.77082 24.6361 9.10723C24.5452 8.99143 24.4959 8.84844 24.4961 8.70123V7.72736C24.4961 7.33361 24.6711 6.97486 24.9511 6.73248H32.8987ZM25.3711 9.79498C25.3711 9.56292 25.4633 9.34036 25.6274 9.17626C25.7915 9.01217 26.014 8.91998 26.2461 8.91998C26.4782 8.91998 26.7007 9.01217 26.8648 9.17626C27.0289 9.34036 27.1211 9.56292 27.1211 9.79498C27.1211 10.027 27.0289 10.2496 26.8648 10.4137C26.7007 10.5778 26.4782 10.67 26.2461 10.67C26.014 10.67 25.7915 10.5778 25.6274 10.4137C25.4633 10.2496 25.3711 10.027 25.3711 9.79498ZM33.2461 8.91998C33.4782 8.91998 33.7007 9.01217 33.8648 9.17626C34.0289 9.34036 34.1211 9.56292 34.1211 9.79498C34.1211 10.027 34.0289 10.2496 33.8648 10.4137C33.7007 10.5778 33.4782 10.67 33.2461 10.67C33.014 10.67 32.7915 10.5778 32.6274 10.4137C32.4633 10.2496 32.3711 10.027 32.3711 9.79498C32.3711 9.56292 32.4633 9.34036 32.6274 9.17626C32.7915 9.01217 33.014 8.91998 33.2461 8.91998Z"
                                        fill="#396FFD" />
                                    <defs>
                                        <clipPath id="clip0_15_2488">
                                            <rect width="14" height="14" fill="white"
                                                transform="translate(0.746094 0.169983)" />
                                        </clipPath>
                                    </defs>
                                </svg>


                            </div>
                        </div>
                        <div class="frame-1000001642">
                            <div class="frame-1000001497">
                                @if ($delivered_request->vehicle_type == 'car')
                                <x-icons.car />
                                @else
                                <x-icons.bike />
                                @endif
                                <div class="bmw">BMW</div>
                            </div>
                            <div class="frame-1000001499">
                                <div class="total-00-00">Total: 00.00</div>
                                <div class="due-00-00">Due: 00.00</div>
                            </div>
                        </div>
                        <div class="head">
                            <div class="frame-1000005256">
                                <div class="frame-10000016422">
                                    <div class="frame-1000005257">
                                        <div class="garage">
                                            <span>
                                                <span class="garage-span">g</span>
                                                <span class="garage-span">arage:</span>
                                            </span>
                                        </div>
                                        <div class="motor">{{ $delivered_request->mechanic->name??"" }}</div>
                                    </div>
                                </div>
                                <div class="frame-1000001641">
                                    <div class="frame-1000005257">
                                        <div class="driver">Driver:</div>
                                        <div class="ahmed-mohamed">{{ $delivered_request->driver?->name??"" }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame-1000005262">
                        <div class="group-1000002307">
                            <div class="rectangle-18"></div>
                            <div class="rectangle-194"
                                style="width: {{ $delivered_request->work_order_status->percentage() }}%"></div>
                        </div>
                        <div class="frame-1000005258">
                            <div class="progress">Progress</div>
                            <div class="_30">{{ $delivered_request->work_order_status->percentage() }}%</div>
                        </div>
                    </div>
                    <div class="frame-1000005261">
                        <div class="frame-1000005255">
                            <div class="frame-1000005254">
                                <img class="ellipse-9" src="ellipse-912.png" />
                                <img class="ellipse-10" src="ellipse-1012.png" />
                            </div>
                            <div class="group-1000002308">
                                <div class="ellipse-42"></div>
                                <img class="akar-icons-plus13" src="akar-icons-plus12.svg" />
                            </div>
                        </div>
                        <div class="frame-10000052535">
                            <div class="_25-days-left5">25 days left</div>
                        </div>
                    </div>
                    <div class="frame-1000005263">
                        <div class="line-1"></div>
                        <div class="frame-1000005260">
                            <div class="nov-26-2025">Nov 26, 2025</div>
                            <div class="nov-26-2025">Nov 26, 2025</div>
                        </div>
                    </div>
                </div>
                <div class="group-20-3"></div>
            </div>
        </a>
        @endforeach
        {{ $groupedRequests['delivered']->appends($_GET)->links()}}

    </div>
</div>
