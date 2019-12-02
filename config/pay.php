<?php

return [
    'alipay' => [
        'app_id'         => '2016101300679100',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoshGTfjKIBM4BUS2umZ2jA4OsdZJZ9L/O21V7+3EuAWCdQvq1aC3TBO9CmItMb4D2XCzUn61cCoixsgbSMhMbO8HaR2Yv+Yf+69zg9zyXGToqJK2lmmyDswZY2wF0vhLywUXor9OwxjHANLgmH0+FwLkQuLxySsTO7U1i1SmEEkz3t3Oc23uJea9LcH3PAettteRV8yOX/yT0BNIQmS2k6mx6JrqUw1e+7iGA2fA3g0gbrFduSVUdLtTih5h0jkDJlq8yaI6+TSYLRnErOCPbPkPtnGEY3YAiS2ZiuM6jHIteDbQP98K0z/+AzpzPxm0pzJNDWIWBRr4aCqK8aZD1wIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAjyJqasofEsQj58ZkkFC91AanyE0brkVJXaqLD44vavrrK6cJ/IDE7hZw5FQJhzpT77/EN6BWKfc0keNKmiL5ZFCEpnmiynQ5kEeQ6SNSR1oALaN0aVKDdwykb+9HP2/fKHpHLXGaaH7nab7DeByXtWAUqbU/ETFaICNddXZ73DKXYdn2ISkqplVWx/cO5zlmHSXkeG8dVRIPXQLaNLbXNZOUfSehtrK3QtGnlLTXEkpiNRbwyxkTZAXbMoUgA3GweRqXYcwHE1M5oGUeV/Skff42Kq/EIBrB3RvRKhw9nHS+8TYLJ3/qc9wtyDvqH689iz4MYPO7vEKonjCUqPxsWQIDAQABAoIBAGgGbSz7hKXQ4v950nCIHc5Qn/QVBj8bn/xxC+vcPF4VyoDJP5rBw1399UIcSWh8XbBqwKJk5vpM7WnxtLBdJr9fPWj4EfXtjkBrosetogi1Qlfo6Zv6Gg2VpJStZCyYk6kJZV2DqOK1CF50A//xV9i74YiNby6BnaypxyytVctr5RqT05XhQYjSVHoEcJmJ4OjONZm7oSDUD2txgm3iWjS4NGIpV74+eRnaLmeSPnYrjn7gtqOLfuGBnIefqRwP3xBhhmO3jYrAotGbBIru01S0GsjdD+KFuUrR2c4NKM5N4noUXiO4iJQho0L7UlTHLuqEUb5086thWpYPvfnFbHkCgYEA63fqVxFXXf7H/VR1Kou+8KL0/Ci29EneHac4729vTlsGMXgtp5Xk1Hhbrh1kfcvrUASfsr/wXMhLyGLCN80jO2grm5tbmutAlqL6UrjaGhr9F0vLjdcBs8kqxclf9xcws3VPOLEV1S5TRUrQm1XCJSfxgrr04lZBlLZJdr18R2MCgYEAm51v+EYRYBK3BLM3BKuoERVzgmU7utvQBqch09AZmfNRJrku2sCjRz5StvMG1SDzwUO48jGLfQoJLdcJqtK08q8Lj/YiltHcUlW8dXFbaZ0sUKAB7jORlGasr1HHFbs5hxJN87BZyQLKMXyT29JxQGj1FABc8GwSez6FToVqYBMCgYBnKNoZ2xcTrxOfAOl0AlVcx4fdEVlWHSaahzCCdaemBGrqMWSPDzR5gWFpHqdwFW66V8w/W6fKflX1LI86Mz1EQZcZTS8M6BQb6rsQkru6xCgtlJ9RPOkaAwAiNt88OYS0mqhihfKyuuDwcp6B70hnTuCYDaBLqM6CgHoe81UHUQKBgETtAv9Q6blIENCAIMpszdBjU/pZpI8rdYS82nrbHbvWzgb81wgFc0zHChQGqOwV4GGmAXElCMelflNTf/Cty4ACkHh/aOqsoY3Gc+cBAqBRAaPke3ZqWP0GTU6KRkgV2XE+ZlCdt+cU2UH6D/O5znfdBVCKqJ/E/pqgIqOY7HkJAoGAZhVq+/N6yMCvK312lyBVyXF5a2bEhWnv50BmhdiXqReBRt+cgSve4Bu9dGb7GOFVwroHiNpgD1OUfYHa6ijGJWO3L6nAwVy5cetN7HE9DDbs9YSNRp0ZZmGl/1onN7rM3FfCU9pd0ZboK/G5T6GJqaXFGhpFa0DDQWvWcya05qg=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
