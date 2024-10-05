<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')


    </head>
    <body class="h-full">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
<div class="min-h-full">
    <nav class="bg-gray-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-25 items-center justify-between">
          <div class="flex items-center">
            <div class="flex-shrink-0 h-25 py-3 ">
                <svg class=" aspect-w-16 aspect-h-9  h-10" viewBox="0 0 200 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M51.4083 85C51.1388 85 50.8713 84.998 50.6058 84.9939C50.6018 84.9939 50.5979 84.9939 50.5939 84.9939C50.2944 84.9899 49.995 84.9818 49.6976 84.9738L49.5779 84.9697C49.2824 84.9596 48.983 84.9496 48.6836 84.9334C48.6776 84.9334 48.6636 84.9314 48.6577 84.9314C47.4061 84.8709 46.1426 84.764 44.917 84.6167L44.885 84.6126C43.3022 84.421 41.7632 84.1547 40.294 83.8238C40.292 83.8238 40.2901 83.8238 40.2881 83.8218C38.4636 83.4102 36.7131 82.8877 35.0843 82.2683L35.0603 82.2603C31.0801 80.7431 27.7706 78.6369 25.2256 75.996C25.1338 75.9012 25.0419 75.8044 24.9501 75.7075C24.8363 75.5845 24.7266 75.4634 24.6168 75.3424C24.503 75.2153 24.3932 75.0841 24.2814 74.955L24.2096 74.8723C24.1477 74.7997 24.0858 74.727 24.0259 74.6544C23.8523 74.4426 23.6766 74.2146 23.489 73.9644C23.4391 73.8958 23.3892 73.8273 23.3393 73.7587L23.2974 73.6981C23.1676 73.5186 23.0399 73.335 22.9141 73.1494L22.8842 73.105C22.8383 73.0364 22.7923 72.9678 22.7464 72.8992C22.5508 72.5986 22.3911 72.3444 22.2434 72.0942C22.2414 72.0902 22.2394 72.0882 22.2374 72.0842C22.2354 72.0821 22.2334 72.0781 22.2334 72.0761C22.2314 72.0721 22.2294 72.07 22.2275 72.066C22.2235 72.0579 22.2195 72.0499 22.2155 72.0438C22.0518 71.7634 21.8941 71.489 21.7424 71.2167C21.7065 71.1501 21.6705 71.0835 21.6346 71.0169L21.5348 70.8333C21.447 70.6719 21.3592 70.5105 21.2753 70.3512C21.2334 70.2705 21.1915 70.1898 21.1516 70.1091L21.0378 69.8831C20.9699 69.752 20.904 69.6188 20.8382 69.4897C20.7943 69.4009 20.7523 69.3122 20.7124 69.2254L20.6006 68.9894C20.5428 68.8703 20.4869 68.7493 20.431 68.6302C20.3871 68.5354 20.3471 68.4426 20.3052 68.3478L20.2054 68.1218C20.1535 68.0048 20.1016 67.8898 20.0517 67.7748C20.0098 67.676 19.9679 67.5771 19.928 67.4783L19.8421 67.2685C19.7942 67.1535 19.7463 67.0385 19.7004 66.9235C19.6585 66.8206 19.6206 66.7177 19.5806 66.6148L19.5048 66.4191C19.4609 66.3061 19.417 66.1932 19.377 66.0802C19.3371 65.9712 19.2992 65.8643 19.2613 65.7554L19.1954 65.5718C19.1555 65.4608 19.1175 65.3499 19.0796 65.2409C19.0397 65.1259 19.0038 65.0129 18.9678 64.8979L18.9119 64.7285C18.878 64.6215 18.8421 64.5146 18.8101 64.4077C18.7742 64.2927 18.7403 64.1797 18.7083 64.0647L18.6584 63.8973C18.6265 63.7924 18.5966 63.6854 18.5666 63.5805C18.5307 63.4514 18.4968 63.3223 18.4628 63.1952L18.4349 63.0903C18.4049 62.9813 18.377 62.8704 18.3491 62.7614C18.3151 62.6242 18.2812 62.4871 18.2492 62.3499L18.2273 62.2591C18.2033 62.1562 18.1774 62.0513 18.1554 61.9484C18.1235 61.8052 18.0936 61.6619 18.0636 61.5207L18.0476 61.446C18.0257 61.3452 18.0057 61.2423 17.9858 61.1414C17.9558 60.9921 17.9299 60.8428 17.9019 60.6935L17.8919 60.6572C17.872 60.5523 17.854 60.4454 17.8361 60.3405C17.8101 60.1871 17.7881 60.0379 17.7642 59.8865L17.7602 59.8664C17.7442 59.7594 17.7283 59.6525 17.7123 59.5476C17.6903 59.3943 17.6704 59.243 17.6524 59.0896L17.6464 59.0473C17.6345 58.9525 17.6225 58.8576 17.6125 58.7648C17.5945 58.6115 17.5786 58.4562 17.5646 58.3028L17.5626 58.2746C17.5546 58.1818 17.5446 58.087 17.5366 57.9942C17.5227 57.8368 17.5107 57.6794 17.5007 57.5241C17.4927 57.4252 17.4867 57.3264 17.4808 57.2295C17.4708 57.0702 17.4628 56.9128 17.4568 56.7554C17.4528 56.6606 17.4488 56.5678 17.4448 56.475C17.4388 56.3136 17.4348 56.1542 17.4328 55.9928C17.4309 55.9041 17.4309 55.8153 17.4289 55.7265C17.4269 55.5651 17.4289 55.4017 17.4289 55.2403L17.4328 54.9942C17.4368 54.8267 17.4408 54.6613 17.4468 54.4979L17.4568 54.2699C17.4648 54.1004 17.4728 53.933 17.4827 53.7676L17.4967 53.5598C17.5087 53.3863 17.5227 53.2148 17.5366 53.0473L17.5546 52.8597C17.5726 52.6801 17.5905 52.5066 17.6085 52.3352L17.6285 52.1637C17.6504 51.9861 17.6724 51.8106 17.6983 51.6351L17.7203 51.4878C17.7462 51.3062 17.7742 51.1267 17.8041 50.9492L17.8261 50.82C17.858 50.6344 17.8899 50.4529 17.9259 50.2713L17.9478 50.1623C17.9838 49.9788 18.0217 49.7932 18.0636 49.6075L18.0816 49.5268C18.1255 49.3332 18.1694 49.1415 18.2153 48.9539L18.2253 48.9155C18.2772 48.7037 18.3271 48.51 18.381 48.3164C18.383 48.3103 18.387 48.2921 18.389 48.2861C18.4429 48.0864 18.4988 47.8907 18.5586 47.695C18.5586 47.6909 18.5606 47.6889 18.5606 47.6849C18.6245 47.4731 18.6904 47.2632 18.7563 47.0554C18.7582 47.0494 18.7602 47.0413 18.7642 47.0333C18.8321 46.8255 18.898 46.6298 18.9678 46.4341C18.9718 46.426 18.9738 46.4179 18.9778 46.4078C19.0457 46.2182 19.1175 46.0225 19.1914 45.8268C19.1934 45.8208 19.2034 45.7965 19.2054 45.7905C19.2732 45.613 19.3491 45.4233 19.4249 45.2357C19.4269 45.2317 19.4329 45.2135 19.4349 45.2095C19.5128 45.0218 19.5906 44.8382 19.6685 44.6587C19.6705 44.6567 19.6765 44.6385 19.6784 44.6365C19.7603 44.4489 19.8421 44.2713 19.924 44.0978C19.926 44.0958 19.9339 44.0756 19.9359 44.0736C20.0238 43.888 20.1056 43.7185 20.1894 43.5511L20.2094 43.5128C20.2932 43.3433 20.3791 43.1799 20.4649 43.0185L20.4928 42.966C20.5447 42.8692 20.5966 42.7703 20.6505 42.6715C20.6346 42.6594 20.6186 42.6493 20.6026 42.6372L20.5308 42.5868C20.2932 42.4193 20.0477 42.2357 19.8042 42.0481L19.7343 41.9936C19.4808 41.7959 19.2393 41.6022 19.0118 41.4106C19.0078 41.4065 18.9918 41.3924 18.9858 41.3884C18.4968 40.9748 18.0197 40.537 17.5666 40.0851L17.5466 40.0669C17.3271 39.847 17.1075 39.6191 16.8899 39.383L16.854 39.3427C16.832 39.3185 16.8101 39.2963 16.7881 39.272C15.9957 39.3023 15.1872 39.3003 14.3708 39.264C11.8418 39.153 9.68403 38.7717 7.96141 38.1322C7.95342 38.1281 7.93745 38.1241 7.92548 38.1181C4.92336 36.9923 3.95326 35.3662 3.66583 34.1981C3.37639 33.0199 3.6798 31.8135 4.50019 30.8874C5.98328 29.2129 7.52626 28.3091 7.97738 28.067C8.24485 27.8895 9.43252 27.0825 10.7879 25.8357C10.74 25.3596 10.706 24.8794 10.6861 24.4013L10.6781 24.2116C10.6681 23.9191 10.6641 23.671 10.6641 23.4349C10.6641 23.4289 10.6641 23.4208 10.6641 23.4147C10.6641 19.1216 11.8238 14.9232 14.0195 11.2716C14.1153 11.1102 14.2152 10.9508 14.315 10.7935C14.5146 10.4787 14.7262 10.164 14.9397 9.85937C15.2611 9.40342 15.6024 8.95353 15.9557 8.51977C16.1913 8.23127 16.4348 7.94681 16.6843 7.67042C17.0576 7.25684 17.4488 6.85132 17.848 6.46599C18.1155 6.20775 18.393 5.95355 18.6704 5.70944C18.8101 5.58637 18.9519 5.46532 19.0936 5.34629C19.6645 4.87017 20.2633 4.41624 20.8761 3.99862C21.4909 3.57899 22.1336 3.18357 22.7864 2.82647C23.2794 2.55613 23.7864 2.30193 24.2954 2.06791C24.6367 1.91256 24.986 1.76327 25.3354 1.62406C28.0401 0.546734 30.8985 0 33.8307 0C34.0722 0 34.3118 0.00403521 34.5493 0.0121051L34.7589 0.0201744C34.9385 0.0282443 35.1182 0.0363148 35.2978 0.0484196L35.4954 0.0605239C35.733 0.0766637 35.9725 0.0968382 36.2081 0.121048C36.216 0.121048 36.226 0.123065 36.236 0.125083C36.4655 0.149292 36.6911 0.177537 36.9167 0.207799L37.0963 0.234026C37.2859 0.260253 37.4756 0.290515 37.6632 0.322795L37.8149 0.349022C38.1243 0.403494 38.4497 0.468052 38.775 0.538664C38.9267 0.570943 39.0764 0.60524 39.2261 0.643572L39.3519 0.673835C39.5595 0.726289 39.7671 0.778743 39.9727 0.83725L40.0565 0.859441C40.5156 0.988559 40.9887 1.13785 41.4538 1.30127L41.5256 1.32749C42.2223 1.57564 42.9149 1.86011 43.5836 2.17483C43.5856 2.17685 43.6036 2.18492 43.6056 2.18492C44.1385 2.43508 44.6695 2.71148 45.1825 3.00401C45.4619 3.16339 45.7414 3.33084 46.0148 3.50233C46.0208 3.50636 46.0268 3.5104 46.0328 3.51241C46.8332 4.01476 47.6217 4.57965 48.3662 5.18691L48.4042 5.21919C48.6377 5.40883 48.8772 5.61462 49.1108 5.8204C49.1148 5.82443 49.1287 5.83654 49.1327 5.84057C49.6058 6.26021 50.0669 6.70607 50.504 7.16403C50.7236 7.39402 50.9332 7.622 51.1408 7.86006L51.1927 7.91856C51.3943 8.15057 51.5939 8.3846 51.7795 8.61661L51.8055 8.64889C52.1967 9.13712 52.57 9.63947 52.9193 10.1519L52.9632 10.2144C53.1269 10.4565 53.2906 10.7087 53.4503 10.9649L53.5061 11.0577C53.6738 11.3281 53.8235 11.5823 53.9653 11.8345L53.9912 11.8809C54.1529 12.1694 54.2946 12.4337 54.4283 12.6939C54.4303 12.6979 54.4323 12.702 54.4343 12.704C54.5701 12.9703 54.6998 13.2386 54.8355 13.5332L54.8855 13.6421C55.0072 13.9084 55.123 14.1788 55.2348 14.4491L55.2847 14.5702C55.4064 14.8708 55.5102 15.1451 55.606 15.4114L55.626 15.4679C55.7258 15.7484 55.8216 16.0328 55.9114 16.3173L55.9354 16.3899C56.0192 16.6643 56.1011 16.9447 56.1849 17.2514L56.2248 17.4007C56.3007 17.6851 56.3685 17.9736 56.4324 18.2561L56.4624 18.3973C56.5322 18.7221 56.5901 19.0146 56.64 19.2951L56.648 19.3495C56.6959 19.6259 56.7398 19.9185 56.7837 20.2332L56.7997 20.3563C56.8356 20.6367 56.8676 20.9292 56.8975 21.248L56.9115 21.4174C56.9374 21.7261 56.9574 22.0287 56.9694 22.3172L56.9754 22.4605C56.9893 22.8115 56.9953 23.1242 56.9953 23.4147C56.9953 27.4335 56.0112 31.2829 54.1229 34.7227C54.1908 34.7267 54.2607 34.7327 54.3305 34.7388L54.9034 34.7872C55.0551 34.8013 55.2068 34.8134 55.3605 34.8296L55.4503 34.8377C55.5761 34.8498 55.7039 34.8619 55.8316 34.876L55.9693 34.8901C56.0971 34.9042 56.2268 34.9163 56.3586 34.9305L56.4524 34.9405C56.6121 34.9587 56.7718 34.9769 56.9334 34.995L57.0672 35.0112C57.1909 35.0253 57.3167 35.0414 57.4424 35.0576L57.5981 35.0777C57.7458 35.0959 57.8976 35.1161 58.0513 35.1362L58.0832 35.1403C58.0872 35.1403 58.1012 35.1423 58.1051 35.1423C58.2748 35.1645 58.4445 35.1887 58.6161 35.2129L59.3208 35.3158C59.4964 35.342 59.6721 35.3703 59.8517 35.3985L59.9036 35.4066C60.0713 35.4328 60.235 35.4611 60.3967 35.4873L60.5683 35.5155C60.706 35.5397 60.8438 35.5639 60.9835 35.5882L61.1352 35.6144C61.3208 35.6487 61.5065 35.681 61.6921 35.7153L61.8039 35.7354C61.9596 35.7657 62.1133 35.7939 62.269 35.8242L62.4466 35.8585C62.5983 35.8888 62.75 35.919 62.9017 35.9493L63.0355 35.9775C63.2271 36.0179 63.4207 36.0582 63.6163 36.1006L63.7601 36.1329C63.9138 36.1672 64.0675 36.1994 64.2192 36.2358L64.4008 36.2761C64.5725 36.3144 64.7461 36.3548 64.9178 36.3972L65.0016 36.4173C65.2052 36.4658 65.4088 36.5162 65.6104 36.5646L65.7701 36.605C65.9278 36.6453 66.0835 36.6836 66.2412 36.724L66.4208 36.7704C66.6264 36.8249 66.834 36.8793 67.0416 36.9358C67.3171 37.0105 67.5906 37.0791 67.864 37.1436L68.1016 37.1981C68.3092 37.2465 68.5167 37.2909 68.7203 37.3333L68.9359 37.3776C69.1954 37.4301 69.4529 37.4765 69.7084 37.5209L69.932 37.5572C70.1176 37.5875 70.3012 37.6157 70.4849 37.6419C70.5847 37.6561 70.6865 37.6702 70.7863 37.6823C70.958 37.7045 71.1276 37.7247 71.2953 37.7428C71.4151 37.7569 71.5388 37.769 71.6586 37.7811C71.8482 37.7993 72.0358 37.8175 72.2215 37.8316C72.3472 37.8417 72.473 37.8497 72.5987 37.8578C72.7105 37.8659 72.8183 37.8719 72.9281 37.876C73.0638 37.882 73.2016 37.8901 73.3373 37.8941L73.5369 37.9002C73.8443 37.9082 74.1417 37.9123 74.4252 37.9103H74.5709C74.7385 37.9082 74.9062 37.9062 75.0719 37.9002L75.1577 37.8982C75.6987 37.88 76.2336 37.8477 76.7526 37.7993C80.9324 37.4079 84.182 36.0683 85.8288 34.9446C85.8947 34.9002 85.9566 34.8558 86.0184 34.8114L86.0544 34.7852C86.1083 34.7469 86.1562 34.7106 86.2021 34.6742L86.264 34.6238C86.266 34.6218 86.2819 34.6097 86.2839 34.6077C86.3099 34.5875 86.3338 34.5673 86.3578 34.5471C86.3997 34.5108 86.4436 34.4725 86.4855 34.4342C87.1243 33.8269 87.9986 33.603 88.8269 33.833C89.7771 34.0972 91.0107 34.9083 92.1285 38.8706C92.2203 39.1974 92.3101 39.5404 92.394 39.8914C92.4798 40.2465 92.5616 40.6157 92.6375 40.9909C92.7552 41.5659 92.861 42.1691 92.9568 42.7804C93.0547 43.4119 93.1385 44.0656 93.2084 44.7232C93.2563 45.1731 93.2982 45.6331 93.3321 46.0931C93.4239 47.2975 93.4678 48.5242 93.4639 49.7427C93.4619 50.2511 93.4519 50.7676 93.4339 51.274C93.406 52.0628 93.3561 52.8557 93.2882 53.6324C93.2403 54.169 93.1824 54.7077 93.1165 55.2343C92.5916 59.3963 91.4957 63.2073 89.8569 66.5583C88.787 68.7473 87.4756 70.7506 85.9606 72.5078C85.7889 72.7076 85.5993 72.9174 85.3837 73.1494C85.3398 73.1978 85.2919 73.2462 85.246 73.2946L85.1961 73.3471C85.0583 73.4924 84.9166 73.6356 84.7709 73.7788C84.697 73.8515 84.6232 73.9241 84.5493 73.9947C84.4036 74.1339 84.2579 74.2711 84.1082 74.4083L84.0503 74.4607C83.9984 74.5092 83.9465 74.5576 83.8926 74.604C83.701 74.7755 83.5074 74.9429 83.3078 75.1104L83.2199 75.185C82.9964 75.3706 82.7668 75.5562 82.5133 75.7539C82.4634 75.7923 82.4115 75.8326 82.3596 75.8709L82.2957 75.9194C82.1261 76.0485 81.9544 76.1796 81.7788 76.3067C81.6909 76.3713 81.6011 76.4358 81.5113 76.5004C81.3436 76.6194 81.1739 76.7385 81.0023 76.8555L80.9384 76.8999C80.8705 76.9463 80.8027 76.9927 80.7348 77.0391C80.5332 77.1742 80.3296 77.3074 80.122 77.4385L80.0621 77.4769C80.0222 77.5031 79.9843 77.5273 79.9443 77.5535C79.6809 77.7189 79.4134 77.8824 79.1419 78.0438C79.088 78.076 79.0341 78.1063 78.9802 78.1386L78.9004 78.185C78.7048 78.3 78.5072 78.413 78.3075 78.5239C78.2097 78.5784 78.1119 78.6329 78.0121 78.6873L77.9922 78.6994C77.8085 78.8003 77.6249 78.8992 77.4393 78.996L77.4093 79.0122C77.3095 79.0646 77.2117 79.1171 77.1119 79.1675C76.9103 79.2704 76.7067 79.3733 76.5011 79.4741L76.4073 79.5206C76.3474 79.5508 76.2875 79.5811 76.2256 79.6093C75.9382 79.7485 75.6468 79.8857 75.3513 80.0209C75.2875 80.0511 75.2236 80.0794 75.1597 80.1076L75.0619 80.152C74.8563 80.2448 74.6467 80.3376 74.4351 80.4304C74.3134 80.4829 74.1896 80.5353 74.0639 80.5878C73.8703 80.6705 73.6826 80.7472 73.495 80.8238C73.3612 80.8783 73.2275 80.9328 73.0938 80.9852C72.9021 81.0619 72.7065 81.1365 72.5129 81.2112L72.4091 81.2515C72.3173 81.2878 72.2255 81.3222 72.1317 81.3565C71.8282 81.4694 71.5229 81.5804 71.2154 81.6893C71.1376 81.7176 71.0578 81.7438 70.9779 81.772L70.8482 81.8164C70.6446 81.887 70.443 81.9556 70.2374 82.0222C70.0937 82.0686 69.9499 82.115 69.8082 82.1614L69.7743 82.1715C69.5986 82.228 69.425 82.2825 69.2473 82.3369C69.0816 82.3874 68.918 82.4378 68.7543 82.4862C68.5826 82.5367 68.4109 82.5871 68.2373 82.6375L68.1435 82.6638C68.0077 82.7021 67.872 82.7424 67.7363 82.7808C67.5806 82.8252 67.4229 82.8675 67.2652 82.9079L67.1794 82.9301C66.8799 83.0108 66.5805 83.0874 66.2791 83.1641L66.1633 83.1944C66.0396 83.2246 65.9158 83.2569 65.7901 83.2872C65.6144 83.3295 65.4408 83.3699 65.2651 83.4102L65.2132 83.4223C65.0635 83.4566 64.9138 83.4909 64.7641 83.5252C64.5665 83.5696 64.3669 83.612 64.1673 83.6564C64.0235 83.6866 63.8838 83.7149 63.7421 83.7451C63.5345 83.7875 63.3249 83.8299 63.1173 83.8702C63.0455 83.8843 62.9716 83.8985 62.8997 83.9106L62.78 83.9328C62.2909 84.0256 61.8059 84.1103 61.3388 84.187L61.1632 84.2172C60.9256 84.2556 60.6901 84.2919 60.4525 84.3262L60.1172 84.3766C59.8837 84.4109 59.6481 84.4432 59.4106 84.4734L59.0892 84.5158C58.8437 84.5481 58.5962 84.5783 58.3487 84.6066L58.163 84.6268C57.3007 84.7236 56.4224 84.8023 55.5561 84.8628L55.3705 84.8749C55.101 84.8931 54.8296 84.9092 54.5601 84.9233L54.3465 84.9334C54.0691 84.9475 53.7896 84.9596 53.5101 84.9697L53.4303 84.9717C52.7536 84.9899 52.077 85 51.4083 85ZM50.6577 80.961C51.526 80.9731 52.4123 80.9651 53.2946 80.9348L53.3644 80.9328C53.6259 80.9227 53.8874 80.9126 54.1469 80.8985L54.3445 80.8884C54.598 80.8743 54.8515 80.8602 55.105 80.844L55.2787 80.8319C56.0911 80.7754 56.9135 80.7008 57.7199 80.61L57.8936 80.5918C58.1251 80.5656 58.3567 80.5374 58.5882 80.5071L58.8896 80.4688C59.1112 80.4385 59.3307 80.4103 59.5503 80.378L59.8637 80.3316C60.0853 80.2993 60.3068 80.265 60.5284 80.2287L60.6941 80.2004C61.1312 80.1278 61.5843 80.0491 62.0414 79.9624L62.3588 79.9019C62.5564 79.8635 62.752 79.8232 62.9457 79.7828C63.0774 79.7566 63.2111 79.7284 63.3429 79.7001C63.5285 79.6598 63.7141 79.6194 63.8998 79.5791C64.0415 79.5468 64.1812 79.5145 64.319 79.4822L64.3709 79.4701C64.5326 79.4318 64.6962 79.3955 64.8579 79.3551C64.9697 79.3289 65.0815 79.3007 65.1952 79.2704L65.315 79.2401C65.5965 79.1695 65.8759 79.0969 66.1534 79.0222L66.2412 78.998C66.3849 78.9597 66.5306 78.9214 66.6744 78.881C66.7981 78.8467 66.9199 78.8104 67.0436 78.7761L67.1394 78.7479C67.3011 78.7015 67.4608 78.6551 67.6185 78.6066C67.7722 78.5602 67.9239 78.5138 68.0756 78.4674C68.2393 78.417 68.401 78.3645 68.5646 78.3141L68.5986 78.304C68.7303 78.2617 68.8641 78.2193 68.9958 78.1769C69.1834 78.1144 69.3711 78.0498 69.5587 77.9873L69.7044 77.9368C69.7703 77.9146 69.8342 77.8925 69.9 77.8703C70.1855 77.7694 70.4669 77.6685 70.7464 77.5636C70.8262 77.5333 70.9061 77.5031 70.9839 77.4728L71.0957 77.4305C71.2753 77.3619 71.455 77.2933 71.6306 77.2226C71.7544 77.1742 71.8762 77.1238 71.9979 77.0754C72.1696 77.0048 72.3412 76.9342 72.5109 76.8635C72.6347 76.8111 72.7485 76.7647 72.8602 76.7163C73.0538 76.6336 73.2455 76.5488 73.4351 76.4621L73.7006 76.343C73.9661 76.222 74.2315 76.0949 74.495 75.9678L74.7425 75.8447C74.9282 75.7539 75.1138 75.6611 75.2955 75.5663C75.3853 75.5199 75.4731 75.4735 75.5609 75.4271L75.5909 75.411C75.7586 75.3222 75.9242 75.2334 76.0879 75.1447L76.1079 75.1346C76.1957 75.0862 76.2835 75.0377 76.3714 74.9893C76.551 74.8884 76.7267 74.7876 76.9023 74.6847L77.1179 74.5596C77.3594 74.4164 77.5969 74.2711 77.8305 74.1238L77.9882 74.0209C78.1678 73.9059 78.3495 73.7889 78.5251 73.6699C78.581 73.6316 78.6369 73.5932 78.6928 73.5549L78.7607 73.5085C78.9104 73.4056 79.0581 73.3027 79.2038 73.1978C79.2816 73.1413 79.3595 73.0868 79.4353 73.0303C79.5871 72.9194 79.7368 72.8064 79.8845 72.6934L79.9643 72.6329C80.0002 72.6067 80.0362 72.5784 80.0701 72.5522C80.2897 72.3807 80.4853 72.2234 80.6729 72.068L80.7508 72.0014C80.9184 71.8602 81.0821 71.719 81.2438 71.5737C81.2837 71.5394 81.3216 71.5031 81.3596 71.4688L81.4234 71.4103C81.5472 71.2973 81.671 71.1824 81.7907 71.0653C81.8526 71.0068 81.9145 70.9463 81.9744 70.8858C82.0941 70.7688 82.2099 70.6497 82.3237 70.5287L82.3876 70.4641C82.4175 70.4319 82.4494 70.4016 82.4774 70.3693C82.657 70.1777 82.8087 70.0082 82.9465 69.8508C84.2359 68.3539 85.3557 66.643 86.2739 64.7648C87.7151 61.8152 88.6852 58.436 89.1523 54.7198C89.2122 54.2417 89.2641 53.7534 89.308 53.2672C89.3699 52.5611 89.4158 51.8409 89.4417 51.1227C89.4577 50.6607 89.4677 50.1906 89.4697 49.7246C89.4737 48.6129 89.4337 47.4932 89.3499 46.3957C89.318 45.9761 89.2801 45.5585 89.2361 45.1489C89.1723 44.5538 89.0964 43.9627 89.0086 43.3937C88.9248 42.847 88.8289 42.3104 88.7251 41.7999C88.6573 41.4711 88.5874 41.1483 88.5116 40.8396C88.4397 40.539 88.3638 40.2485 88.286 39.9721C88.1084 39.3447 87.9367 38.8504 87.785 38.4711C85.1202 40.194 81.166 41.4388 77.1179 41.8181C76.5191 41.8746 75.9023 41.9129 75.2835 41.9331L75.1837 41.9371C74.9901 41.9432 74.7984 41.9472 74.6048 41.9492H74.4371C74.1138 41.9492 73.7704 41.9472 73.4231 41.9371L73.3553 41.9351C73.2994 41.9331 73.2455 41.9331 73.1896 41.9311C73.0359 41.925 72.8782 41.917 72.7225 41.9089C72.5967 41.9028 72.469 41.8948 72.3432 41.8867C72.2015 41.8786 72.0578 41.8685 71.9121 41.8564C71.6965 41.8403 71.4829 41.8201 71.2673 41.7999C71.1296 41.7858 70.9899 41.7717 70.8502 41.7556C70.6565 41.7334 70.4609 41.7112 70.2673 41.6849C70.1535 41.6708 70.0378 41.6547 69.924 41.6385C69.7144 41.6083 69.5048 41.576 69.2912 41.5417L69.2114 41.5296C69.1515 41.5195 69.0936 41.5114 69.0337 41.5014C68.7423 41.4509 68.4489 41.3964 68.1535 41.3379C68.0976 41.3258 68.0397 41.3157 67.9838 41.3036L67.9079 41.2875C67.6744 41.2391 67.4389 41.1866 67.2033 41.1322L67.1794 41.1261C67.0975 41.1079 67.0137 41.0878 66.9318 41.0676C66.5785 40.9829 66.2831 40.9082 65.9977 40.8316C65.8021 40.7791 65.6064 40.7266 65.4128 40.6762L65.2471 40.6338C65.0974 40.5955 64.9517 40.5572 64.804 40.5209L64.6523 40.4825C64.4607 40.4341 64.2691 40.3877 64.0814 40.3433L63.9996 40.3232C63.8379 40.2848 63.6742 40.2465 63.5125 40.2102L63.3429 40.1718C63.1992 40.1396 63.0554 40.1073 62.9117 40.075L62.776 40.0447C62.5924 40.0044 62.4107 39.9661 62.2291 39.9297L62.1033 39.9035C61.9616 39.8753 61.8179 39.845 61.6761 39.8168L61.5085 39.7845C61.3608 39.7562 61.215 39.728 61.0693 39.6998L60.9655 39.6796C60.7879 39.6473 60.6122 39.615 60.4386 39.5827L60.2988 39.5585C60.1631 39.5343 60.0334 39.5121 59.9036 39.4899L59.7419 39.4617C59.5882 39.4355 59.4345 39.4113 59.2828 39.387C59.2808 39.387 59.2609 39.383 59.2589 39.383L59.2269 39.377C59.0593 39.3507 58.8916 39.3245 58.7259 39.2983L58.0612 39.2014C57.8995 39.1792 57.7379 39.155 57.5782 39.1349L57.5223 39.1268C57.3846 39.1086 57.2408 39.0905 57.0971 39.0723L56.9514 39.0542C56.8336 39.04 56.7159 39.0259 56.5981 39.0118L56.4703 38.9977C56.3186 38.9795 56.1669 38.9634 56.0172 38.9472L55.9294 38.9371C55.8017 38.923 55.6799 38.9109 55.5581 38.8988L55.4304 38.8867C55.3066 38.8746 55.1889 38.8625 55.0691 38.8504L54.9873 38.8423C54.8395 38.8282 54.6958 38.8161 54.5541 38.804L54.0132 38.7596C53.8894 38.7495 53.7656 38.7394 53.6419 38.7314L53.7537 36.7159L53.6119 38.7273C53.4762 38.7172 53.3425 38.7092 53.2087 38.6991L52.7297 38.6688C52.4662 38.6527 52.2167 38.6406 51.9752 38.6285L51.562 38.6103C51.3244 38.6002 51.0969 38.5942 50.8773 38.5881H50.8553C50.7196 38.5841 50.6018 38.5821 50.4861 38.5801C49.7296 38.5659 49.0469 38.1201 48.7215 37.4301C48.3962 36.7401 48.484 35.923 48.9491 35.3218C51.5979 31.8921 52.9972 27.7725 52.9972 23.4107C52.9972 23.1726 52.9912 22.9144 52.9792 22.6178L52.9752 22.4968C52.9652 22.2608 52.9472 22.0106 52.9273 21.7523L52.9153 21.6131C52.8914 21.3468 52.8654 21.1047 52.8355 20.8727L52.8215 20.7698C52.7856 20.5076 52.7496 20.2655 52.7097 20.0315L52.7017 19.981C52.6638 19.7672 52.6159 19.5251 52.558 19.2527L52.5321 19.1337C52.4802 18.9017 52.4223 18.6656 52.3604 18.4276L52.3285 18.3045C52.2586 18.0463 52.1927 17.8143 52.1249 17.5943L52.1049 17.5298C52.031 17.2958 51.9532 17.0617 51.8714 16.8338L51.8554 16.7894C51.7755 16.5654 51.6877 16.3395 51.5879 16.0913L51.546 15.9905C51.4542 15.7645 51.3564 15.5406 51.2566 15.3227L51.2146 15.2319C51.1029 14.9878 50.9971 14.7699 50.8933 14.5661C50.8893 14.5581 50.8853 14.55 50.8813 14.5439C50.7715 14.326 50.6517 14.1061 50.52 13.8701L50.4961 13.8277C50.3783 13.6179 50.2545 13.4081 50.1148 13.1842L50.0669 13.1075C49.9332 12.8916 49.7974 12.6838 49.6637 12.4861L49.6238 12.4296C49.3363 12.008 49.0269 11.5924 48.7076 11.1929L48.6856 11.1647C48.5279 10.971 48.3642 10.7753 48.1946 10.5816L48.1546 10.5352C47.979 10.3355 47.8053 10.1459 47.6357 9.96831C47.2644 9.57894 46.8811 9.20975 46.4879 8.85871C46.4839 8.85467 46.4719 8.84458 46.4679 8.84055C46.2803 8.6731 46.0807 8.50363 45.8791 8.3382L45.8512 8.31601C45.2384 7.81567 44.5856 7.34762 43.9149 6.92799C43.913 6.92597 43.911 6.92597 43.909 6.92395C43.6814 6.78273 43.4499 6.64353 43.2203 6.51239C42.7951 6.27029 42.356 6.04232 41.9129 5.83452C41.344 5.5662 40.7691 5.33015 40.1922 5.12437L40.1384 5.1042C39.7511 4.96701 39.3599 4.84394 38.9766 4.735L38.9128 4.71684C38.7411 4.66842 38.5714 4.62404 38.3998 4.58167L38.298 4.55746C38.1702 4.5272 38.0464 4.49896 37.9207 4.47071C37.6492 4.41019 37.3818 4.35773 37.1263 4.31335L37.0005 4.29317C36.8468 4.26695 36.6911 4.24274 36.5334 4.22055L36.3857 4.20037C36.1961 4.17414 36.0045 4.15195 35.8128 4.13178C35.8048 4.13178 35.7969 4.12976 35.7869 4.12976C35.5953 4.10958 35.4016 4.09344 35.208 4.07932L35.0423 4.06923C34.8946 4.05915 34.7449 4.0531 34.5952 4.04704L34.4216 4.04099C34.2239 4.03494 34.0243 4.0309 33.8227 4.0309C31.3955 4.0309 29.0301 4.48282 26.7925 5.37454C26.5031 5.48953 26.2136 5.6126 25.9322 5.74172C25.511 5.93338 25.0918 6.14521 24.6846 6.36915C24.1457 6.66572 23.6127 6.99255 23.1037 7.33955C22.5967 7.68656 22.0997 8.06181 21.6266 8.45521C21.5089 8.55407 21.3911 8.65292 21.2753 8.75581C21.0438 8.95756 20.8142 9.1694 20.5927 9.38123C20.2613 9.69999 19.9359 10.0369 19.6285 10.3799C19.4229 10.6079 19.2213 10.8439 19.0257 11.084C18.7323 11.4431 18.4509 11.8143 18.1854 12.1936C18.0077 12.4458 17.8341 12.706 17.6684 12.9663C17.5865 13.0974 17.5047 13.2285 17.4229 13.3617C15.6104 16.3778 14.6503 19.8458 14.6483 23.3925C14.6483 23.3986 14.6483 23.4047 14.6483 23.4107C14.6483 23.6326 14.6543 23.8525 14.6603 24.0724L14.6663 24.2258C14.6942 24.9258 14.7601 25.6198 14.8599 26.2957C14.9537 26.9332 14.7421 27.5768 14.289 28.0287C12.1472 30.1672 10.1212 31.4624 10.0353 31.5169C9.98145 31.5512 9.92356 31.5835 9.86568 31.6137C9.86368 31.6158 8.75186 32.2008 7.65002 33.373C7.8616 33.5989 8.35663 33.9782 9.31276 34.3353C9.32074 34.3373 9.33272 34.3434 9.3427 34.3474C10.6581 34.8336 12.4526 35.1383 14.5345 35.2311C15.5426 35.2754 16.5366 35.2613 17.4847 35.1887C18.1235 35.1403 18.7463 35.4046 19.1595 35.8988L19.2373 35.9916C19.2393 35.9957 19.2453 36.0017 19.2493 36.0058C19.419 36.2055 19.5906 36.3992 19.7663 36.5928L19.8002 36.6292C19.9799 36.8228 20.1615 37.0145 20.3411 37.192L20.3591 37.2102C20.7364 37.5854 21.1316 37.9486 21.5348 38.2895C21.5388 38.2936 21.5568 38.3097 21.5608 38.3117C21.7424 38.4651 21.944 38.6265 22.1536 38.7899L22.2175 38.8383C22.4171 38.9916 22.6207 39.1429 22.8203 39.2842L22.8782 39.3245C23.3033 39.6251 23.7465 39.9096 24.1896 40.1698L24.3613 40.2687C24.8463 40.5471 25.1936 41.0192 25.3194 41.5679C25.4451 42.1167 25.3374 42.6957 25.024 43.1617L24.9401 43.2888C24.8703 43.3937 24.7984 43.5047 24.7266 43.6197L24.6926 43.6742C24.6228 43.7851 24.5509 43.9042 24.479 44.0252L24.4531 44.0676C24.3792 44.1927 24.3074 44.3157 24.2375 44.4428L24.2136 44.4852C24.1417 44.6143 24.0698 44.7454 24 44.8766L23.98 44.9149C23.9082 45.0501 23.8383 45.1852 23.7684 45.3245L23.7485 45.3648C23.6806 45.5 23.6127 45.6432 23.5449 45.7865C23.5449 45.7885 23.5349 45.8066 23.5349 45.8086C23.461 45.964 23.3952 46.1133 23.3293 46.2626C23.3293 46.2646 23.3213 46.2807 23.3193 46.2828C23.2494 46.4421 23.1836 46.5955 23.1197 46.7528C23.1177 46.7569 23.1117 46.773 23.1097 46.775C23.0458 46.9324 22.982 47.0918 22.9201 47.2552C22.9181 47.2612 22.9141 47.2733 22.9101 47.2794C22.8502 47.4388 22.7884 47.6042 22.7285 47.7716C22.7265 47.7757 22.7245 47.7838 22.7205 47.7918C22.6606 47.9593 22.6027 48.1287 22.5468 48.3002C22.5448 48.3043 22.5428 48.3123 22.5408 48.3184C22.483 48.4979 22.4291 48.6694 22.3772 48.8429C22.3752 48.847 22.3752 48.851 22.3732 48.853C22.3233 49.0184 22.2774 49.1839 22.2314 49.3513C22.2294 49.3554 22.2255 49.3755 22.2235 49.3796C22.1795 49.5389 22.1376 49.7044 22.0957 49.8718L22.0877 49.9041C22.0438 50.0776 22.0079 50.239 21.972 50.4024L21.958 50.467C21.922 50.6284 21.8901 50.7857 21.8582 50.9451L21.8382 51.0399C21.8103 51.1892 21.7823 51.3446 21.7544 51.5019L21.7364 51.6089C21.7105 51.7622 21.6865 51.9155 21.6646 52.0689L21.6466 52.1919C21.6246 52.3432 21.6067 52.4945 21.5867 52.6438L21.5687 52.7911C21.5528 52.9364 21.5368 53.0857 21.5228 53.2329L21.5069 53.3943C21.4949 53.5396 21.4829 53.6848 21.4729 53.8321L21.461 54.0117C21.453 54.1549 21.445 54.2982 21.439 54.4414L21.431 54.6351C21.425 54.7763 21.421 54.9175 21.419 55.0587L21.417 55.2706C21.415 55.4078 21.415 55.547 21.417 55.6862C21.417 55.7628 21.419 55.8375 21.419 55.9141C21.421 56.0513 21.425 56.1885 21.429 56.3257C21.431 56.4064 21.435 56.4871 21.439 56.5678C21.445 56.701 21.451 56.8382 21.459 56.9753C21.4629 57.0601 21.4689 57.1428 21.4749 57.2275C21.4849 57.3627 21.4949 57.4958 21.5069 57.631C21.5128 57.7097 21.5208 57.7904 21.5288 57.8711L21.5308 57.8973C21.5428 58.0285 21.5568 58.1616 21.5727 58.2948C21.5827 58.3755 21.5927 58.4541 21.6007 58.5348L21.6067 58.5772C21.6226 58.7063 21.6406 58.8395 21.6586 58.9706C21.6705 59.0614 21.6845 59.1502 21.6985 59.241L21.7025 59.2611C21.7224 59.3923 21.7424 59.5214 21.7644 59.6525C21.7783 59.7413 21.7963 59.8301 21.8123 59.9208L21.8183 59.9572C21.8422 60.0863 21.8642 60.2154 21.8901 60.3445C21.9061 60.4292 21.924 60.514 21.942 60.6007L21.954 60.6613C21.9819 60.7984 22.0079 60.9215 22.0358 61.0446C22.0558 61.1293 22.0757 61.2161 22.0957 61.3028L22.1177 61.3976C22.1456 61.5146 22.1736 61.6337 22.2035 61.7527C22.2274 61.8435 22.2514 61.9363 22.2754 62.0271L22.3053 62.1401C22.3332 62.249 22.3632 62.3579 22.3931 62.4669C22.4171 62.5557 22.443 62.6424 22.469 62.7312L22.5209 62.9047C22.5488 62.9995 22.5768 63.0963 22.6067 63.1912C22.6347 63.2779 22.6626 63.3667 22.6925 63.4554L22.7504 63.635C22.7804 63.7298 22.8123 63.8267 22.8442 63.9215C22.8742 64.0123 22.9081 64.1031 22.9401 64.1959L23.0099 64.3916C23.0419 64.4803 23.0718 64.5691 23.1057 64.6599C23.1397 64.7527 23.1776 64.8475 23.2135 64.9423L23.2934 65.1521C23.3253 65.2369 23.3572 65.3196 23.3912 65.4043C23.4291 65.5012 23.469 65.596 23.5089 65.6928L23.6028 65.9188C23.6347 65.9975 23.6686 66.0782 23.7026 66.1589C23.7445 66.2557 23.7884 66.3525 23.8303 66.4494L23.9381 66.6935C23.972 66.7681 24.004 66.8428 24.0379 66.9194C24.0838 67.0183 24.1317 67.1192 24.1796 67.22L24.3014 67.4763C24.3333 67.5449 24.3673 67.6155 24.4012 67.6841C24.4551 67.795 24.513 67.906 24.5709 68.019L24.6986 68.2691C24.7305 68.3317 24.7605 68.3922 24.7924 68.4547C24.8663 68.596 24.9421 68.7372 25.02 68.8784L25.1358 69.0923C25.1617 69.1387 25.1857 69.1871 25.2116 69.2335C25.3513 69.4836 25.495 69.7358 25.6428 69.988C25.6467 69.9961 25.6587 70.0142 25.6647 70.0263C25.7785 70.22 25.9062 70.4238 26.0659 70.6679C26.0999 70.7204 26.1358 70.7728 26.1717 70.8253L26.2037 70.8717C26.3035 71.0189 26.4053 71.1662 26.5111 71.3115L26.561 71.3801C26.5949 71.4285 26.6288 71.4769 26.6648 71.5233C26.8185 71.7291 26.9602 71.9127 27.0979 72.0801C27.1378 72.1285 27.1778 72.1749 27.2177 72.2234L27.3055 72.3263C27.3933 72.4312 27.4832 72.5361 27.575 72.639C27.6648 72.7398 27.7546 72.8387 27.8464 72.9376C27.9183 73.0162 27.9941 73.0949 28.07 73.1736C30.2038 75.3868 33.0263 77.1722 36.4576 78.4795L36.4795 78.4876C37.9307 79.0384 39.5016 79.5084 41.1464 79.8776H41.1484C42.4877 80.1803 43.897 80.4203 45.3342 80.5959L45.3801 80.6019C46.5079 80.7391 47.6756 80.8359 48.8473 80.8924C48.8533 80.8924 48.8672 80.8944 48.8732 80.8944C49.1347 80.9066 49.4142 80.9187 49.6916 80.9267L49.8034 80.9308C50.0769 80.9388 50.3543 80.9449 50.6318 80.9489C50.6497 80.961 50.6537 80.961 50.6577 80.961Z" fill="#231A15"/>
                    <path d="M47.5639 36.6049C47.5639 36.6049 55.9675 36.0239 66.5228 38.8847C77.0781 41.7455 85.5475 38.1019 87.857 35.9029C90.1664 33.7038 96.1986 57.5564 84.4556 71.1803C72.7126 84.8043 34.4756 88.9542 23.9522 71.0573C13.4288 53.1603 23.8504 38.3339 29.0342 37.186" fill="#FFE000"/>
                    <path d="M87.8548 35.9029C87.6173 36.1288 87.3099 36.3709 86.9466 36.6211C85.699 38.2008 84.1341 40.0609 84.1341 40.0609L86.9566 38.2452C86.9566 38.2452 87.7271 37.077 85.8008 40.535C85.22 41.578 84.5094 42.4899 83.8646 43.198C86.208 41.3077 88.8908 39.5061 87.9806 41.227C86.9546 43.1718 79.2557 49.0083 71.1715 45.5746C63.0873 42.1409 60.2649 42.264 50.8972 44.5558C41.5296 46.8476 37.1162 44.5558 37.1162 44.5558L36.5254 37.2768L37.3618 36.9237L29.0301 37.184C26.3773 37.771 22.3552 41.9391 20.4689 48.2679C21.8761 49.0184 24.7106 50.003 29.0301 49.1375C35.4974 47.8402 37.5494 51.9902 37.6791 65.0896C37.8089 78.189 47.432 81.1708 53.8475 80.9126C60.2629 80.6523 47.5598 83.7371 41.5296 79.5367C35.4994 75.3363 34.7868 76.8918 37.5175 78.8386C40.2461 80.7835 39.6054 81.0135 36.7829 79.5367C33.9604 78.0599 30.4952 75.3363 30.4952 75.3363C30.4952 75.3363 31.2617 78.1628 32.7448 79.0384C48.2385 86.9993 74.9761 82.1776 84.4535 71.1803C96.1965 57.5564 90.1663 33.7038 87.8548 35.9029Z" fill="#BCA100"/>
                    <path d="M76.9382 39.8107C73.9681 41.0817 70.2673 41.9291 66.5206 40.9022C58.0193 38.568 49.2305 38.8847 49.2305 38.8847C49.3742 37.9647 49.6178 37.1961 49.9371 36.5586C53.1588 36.5848 59.3407 36.9378 66.5206 38.8847C70.3312 39.9156 73.8643 40.0992 76.9382 39.8107ZM25.7046 72.6672C25.7046 72.6672 32.8706 75.7237 29.0341 72.6672C25.1976 69.6107 24.4012 61.327 23.7105 63.6612C23.0199 65.9954 26.6528 74.5999 23.7105 69.0539C20.7683 63.5079 20.4709 48.27 20.4709 48.2679C18.6684 54.3082 18.8121 62.3136 23.9501 71.0553C24.9102 72.6894 26.1038 74.1359 27.4851 75.411L25.7046 72.6672Z" fill="white"/>
                    <path d="M33.8308 44.812C45.5229 44.812 55.0013 35.2321 55.0013 23.4147C55.0013 11.5974 45.5229 2.01747 33.8308 2.01747C22.1386 2.01747 12.6603 11.5974 12.6603 23.4147C12.6603 35.2321 22.1386 44.812 33.8308 44.812Z" fill="#FFE000"/>
                    <path d="M12.6603 23.4147C12.6603 23.9615 12.6802 24.5022 12.7202 25.0388C12.7242 25.0085 14.2112 10.9004 24.7865 5.57426C35.3738 0.242094 44.5797 4.97709 44.5797 4.97709C41.4299 3.09681 37.7551 2.01747 33.8308 2.01747C22.1397 2.01747 12.6603 11.5964 12.6603 23.4147Z" fill="white"/>
                    <path d="M38.3519 2.50771C41.891 3.68793 49.4402 7.41218 50.5141 17.8808C51.9253 31.6279 40.8869 39.151 33.8308 39.9297C26.7746 40.7085 25.1478 38.2573 25.7047 37.2768C26.2616 36.2983 28.9823 32.9695 29.0342 30.4174C29.0861 27.8673 28.7966 31.065 25.6049 28.9466C22.4131 26.8283 18.3052 28.5351 15.7242 28.2546C14.9777 28.1739 14.0276 27.9197 13.0475 27.4981C14.9338 37.3615 23.521 44.81 33.8308 44.81C45.5238 44.81 55.0013 35.229 55.0013 23.4127C55.0013 13.166 47.8712 4.60184 38.3519 2.50771Z" fill="#BCA100"/>
                    <path d="M8.98142 29.8121C8.98142 29.8121 12.1472 27.8048 14.6284 24.6575C17.1095 21.5103 18.7343 20.2978 21.4729 22.7207C24.2096 25.1437 25.8364 28.1699 27.8025 28.4282C29.7687 28.6864 29.086 30.6756 27.8025 32.6648C26.5191 34.6541 22.3273 37.5935 14.4567 37.2465C6.58612 36.9015 4.53414 33.8753 5.98729 32.2311C7.44244 30.5909 8.98142 29.8121 8.98142 29.8121Z" fill="#FF7F1F"/>
                    <path d="M27.8026 28.4302C25.8345 28.1699 24.2097 25.1437 21.473 22.7228C20.6566 22.0005 19.94 21.6031 19.2694 21.482C20.0838 21.7927 21.503 22.5694 22.8004 25.0388C24.565 28.3999 25.6429 31.067 21.6447 34.1356C17.6825 37.1779 8.7839 36.2479 8.6322 36.2317C8.63819 36.2337 8.64418 36.2378 8.65216 36.2398C9.04539 36.3729 14.7642 38.2472 20.475 35.7617C24.0879 34.19 24.9203 33.2721 25.08 32.9634C25.084 33.0018 25.0919 33.0461 25.1099 33.1006C25.3295 33.728 22.8643 35.3118 21.2235 36.6352C24.8364 35.7132 26.9563 33.9843 27.8046 32.6689C29.0861 30.6776 29.7688 28.6884 27.8026 28.4302Z" fill="#C4570C"/>
                    <path d="M52.9533 47.4509C52.9533 47.4509 59.3688 45.8954 65.9139 48.4878C72.4591 51.0823 76.1798 51.859 79.0023 50.1745C81.8248 48.4878 81.3118 52.898 80.0283 60.1609C78.7448 67.4238 74.7666 75.7822 60.3948 77.0492C46.0229 78.3161 40.1205 68.0714 40.2482 61.4561C40.378 54.8429 46.6557 47.8624 52.9533 47.4509Z" fill="#FFE000"/>
                    <path d="M62.8339 49.1375C62.8339 49.1375 67.4528 52.2504 73.2275 52.2504C79.0022 52.2504 79.643 50.5638 79.9004 51.6028C80.1579 52.6398 81.4394 61.9202 73.998 70.2503C66.5566 78.5804 53.3385 76.7062 49.2325 73.6215C49.2325 73.6215 53.596 75.7983 61.5504 73.6215C69.5048 71.4446 62.4526 72.3525 60.6542 71.0573C58.8557 69.76 62.7061 70.9282 68.2233 67.6861C73.7405 64.444 74.511 60.2941 74.511 60.2941C74.511 60.2941 72.3293 63.1468 70.6606 63.6653C68.9918 64.1838 73.0978 60.5967 74.6388 57.0722C76.1777 53.5497 71.0458 56.4024 70.4051 55.4945C69.7643 54.5867 72.8063 54.9276 72.2015 53.5497C71.5967 52.1717 65.3989 53.1583 62.8339 49.1375Z" fill="#BCA100"/>
                    <path d="M41.1464 59.3721C39.4138 67.7264 45.959 71.8622 45.959 71.8622C41.9089 68.0916 43.0727 63.8569 46.7295 66.06C50.3863 68.2631 50.2406 67.3572 50.2406 67.3572C50.2406 67.3572 49.4242 66.7742 46.5379 63.8993C43.6515 61.0264 44.2284 59.3802 46.5379 61.4864C48.8473 63.5926 50.2406 62.6828 50.2406 62.6828C50.2406 62.6828 45.5738 58.9908 47.5 54.0197C49.4242 49.0467 59.6262 49.1355 59.6262 49.1355C47.5978 47.8039 42.879 51.0178 41.1464 59.3721Z" fill="white"/>
                    <path d="M32.3876 24.6595C34.2397 24.6595 35.741 23.1421 35.741 21.2702C35.741 19.3983 34.2397 17.8808 32.3876 17.8808C30.5356 17.8808 29.0342 19.3983 29.0342 21.2702C29.0342 23.1421 30.5356 24.6595 32.3876 24.6595Z" fill="#B29904"/>
                    <path d="M32.3876 17.8808C30.5352 17.8808 29.0342 19.398 29.0342 21.2702C29.0342 23.1424 30.5352 24.6595 32.3876 24.6595C34.24 24.6595 35.741 23.1424 35.741 21.2702C35.741 19.398 34.24 17.8808 32.3876 17.8808ZM31.9085 23.1041C28.7208 23.1041 28.7268 18.1048 31.9085 18.1048C35.0963 18.1048 35.0903 23.1041 31.9085 23.1041Z" fill="#87720A"/>
                    <path d="M31.7648 20.907C32.4262 20.907 32.9624 20.3651 32.9624 19.6965C32.9624 19.028 32.4262 18.4861 31.7648 18.4861C31.1033 18.4861 30.5671 19.028 30.5671 19.6965C30.5671 20.3651 31.1033 20.907 31.7648 20.907Z" fill="white"/>
                    <ellipse cx="31.3619" cy="20.9185" rx="8.2297" ry="7.86824" fill="url(#paint0_linear_26_474)"/>
                    <ellipse cx="7.78485" cy="20.0193" rx="7.78485" ry="7.41862" fill="url(#paint1_linear_26_474)"/>
                    <path d="M23.7995 22.9418C22.6364 22.3103 19.9655 21.4008 18.7949 21.4806C17.6244 21.5603 15.4331 22.3768 14.4576 22.9418" stroke="#E57F08"/>
                    <path d="M24.4668 17.3216H14.0128" stroke="#E57F08"/>
                    <path d="M38.7019 19.9069L54.7165 16.1976" stroke="#E57F08"/>
                    <defs>
                    <linearGradient id="paint0_linear_26_474" x1="37" y1="14" x2="26" y2="28" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E57F08"/>
                    <stop offset="0.449794" stop-color="#E57F08"/>
                    <stop offset="1" stop-color="#FFC580"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_26_474" x1="12.5" y1="13.5" x2="5" y2="26.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#E57F08"/>
                    <stop offset="0.485" stop-color="#E57F08"/>
                    <stop offset="1" stop-color="#FFC580"/>
                    </linearGradient>
                    </defs>
                </svg>
                    
            </div>
            <div class="">
              <div class="ml-10 flex items-baseline space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="#" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" >Главная</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" >Описание</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" >Данные</a>

              </div>
            </div>
          </div>


        </div>
      </div>
 
    </nav>
  

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
<h1 class=" text-2xl text-bold">Главная</h1>
<p>Учебный проект для изучения laravel </p>
      </div>
    </main>
  </div>
  
    </body>
</html>

