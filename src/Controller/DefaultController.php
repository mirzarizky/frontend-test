<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $pricings = $this->getPricing();

        return $this->render('index.html.twig', [
            'pricings' => $pricings
        ]);
    }

    protected function getPricing()
    {
        $prices = [
            [
                'name' => 'Bayi',
                'price' => [
                    'slashed' => 19900,
                    'current' => 14900
                ],
                'users' => 938,
                'description' =>    '<ul>
                                        <li><strong>0.5X RESOURCE POWER</strong></li>
                                        <li><strong>500 MB</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Bandwidth</li>
                                        <li><strong>Unlimited</strong> Databases</li>
                                        <li><strong>1</strong> Domain</li>
                                        <li><strong>Instant</strong> Backup</li>
                                        <li><strong>Unlimited SSL</strong> Gratis Selamanya</li>
                                    </ul>',
                'is_best_seller' => false,
            ],
            [
                'name' => 'Pelajar',
                'price' => [
                    'slashed' => 46900,
                    'current' => 23450
                ],
                'users' => 4168,
                'description' =>    '<ul>
                                        <li><strong>1X RESOURCE POWER</strong></li>
                                        <li><strong>Unlimited</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Bandwidth</li>
                                        <li><strong>Unlimited</strong> POP3 Email</li>
                                        <li><strong>Unlimited</strong> Databases</li>
                                        <li><strong>10</strong> Addon Domains</li>
                                        <li><strong>Instant</strong> Backup</li>
                                        <li><strong>Domain Gratis</strong> Selamanya</li>
                                        <li><strong>Unlimited SSL</strong> Gratis Selamanya</li>
                                    </ul>',
                'is_best_seller' => false,
            ],
            [
                'name' => 'Personal',
                'price' => [
                    'slashed' => 58900,
                    'current' => 38900
                ],
                'users' => 10017,
                'description' =>    '<ul>
                                        <li><strong>2X RESOURCE POWER</strong></li>
                                        <li><strong>Unlimited</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Bandwidth</li>
                                        <li><strong>Unlimited</strong> POP3 Email</li>
                                        <li><strong>Unlimited</strong> Databases</li>
                                        <li><strong>Unlimited</strong> Addon Domains</li>
                                        <li><strong>Instant</strong> Backup</li>
                                        <li><strong>Domain Gratis</strong> Selamanya</li>
                                        <li><strong>Unlimited SSL</strong> Gratis Selamanya</li>
                                        <li><strong>Private</strong> Name Server</li>
                                        <li><strong>SpamAssasin</strong> Mail Protection</li>
                                    </ul>',
                'is_best_seller' => true,
            ],
            [
                'name' => 'Bisnis',
                'price' => [
                    'slashed' => 109900,
                    'current' => 65900
                ],
                'users' => 3552,
                'description' =>    '<ul>
                                        <li><strong>3X RESOURCE POWER</strong></li>
                                        <li><strong>Unlimited</strong> Disk Space</li>
                                        <li><strong>Unlimited</strong> Bandwidth</li>
                                        <li><strong>Unlimited</strong> POP3 Email</li>
                                        <li><strong>Unlimited</strong> Databases</li>
                                        <li><strong>Unlimited</strong> Addon Domains</li>
                                        <li><strong>Magic Auto</strong> Backup &amp; Restore</li>
                                        <li><strong>Domain Gratis</strong> Selamanya</li>
                                        <li><strong>Unlimited SSL</strong> Gratis Selamanya</li>
                                        <li><strong>Private</strong> Name Server</li>
                                        <li>★★★★★</li>
                                        <li><strong>Prioritas</strong> Layanan Support</li>
                                        <li><strong>SpamExpert </strong>Pro Mail Protection</li>
                                    </ul>',
                'is_best_seller' => false,
            ],

        ];

        return $prices;
    }
}
