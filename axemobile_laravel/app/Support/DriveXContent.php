<?php

namespace App\Support;

class DriveXContent
{
    public static function serviceExtras(string $slug, array $service): array
    {
        $title = $service['title'] ?? 'This service';
        $brand = 'DriveX Automotors UK LTD';

        $map = [
            'buy-sell-cars' => [
                'body' => [
                    "{$brand} is a UK-based dealer focused on handpicked premium used cars at competitive prices. Whether you are buying your next vehicle or selling the one you have, we keep every step transparent — from first WhatsApp message to keys in hand.",
                    'Our Coventry team, directed by Rahul Reddy and associated with S&U Prime Autos LTD, sources desirable stock and presents it honestly. You get clear condition notes, realistic pricing and zero pressure sales.',
                    'Looking for something specific? Tell us your budget, preferred make and must-have features. We can match current stock or help source the right car. Prefer to sell? Share your registration and photos for a competitive valuation.',
                ],
                'benefits' => [
                    'Handpicked premium used cars with quality, trust and value at the centre',
                    'Competitive buy-in offers when you sell to DriveX',
                    'Part exchange welcome against our stock',
                    'Warranty options available on selected vehicles',
                    'Book a viewing by WhatsApp, call or contact form',
                    'UK-based dealer support before and after sale',
                ],
                'includes' => [
                    'Vehicle history and condition discussion before you commit',
                    'Clear asking price / purchase offer with no hidden games',
                    'Assistance with paperwork and handover',
                    'Guidance on warranty, finance conversations and next steps',
                    'Aftercare advice so ownership stays smooth',
                ],
                'why' => [
                    'More than just cars — quality people for better journeys',
                    'Cars for a brighter tomorrow, not a rushed deal',
                    'Direct access to the team on WhatsApp (07554959867 / 07352676590)',
                    'Instagram stock updates via @drivexmotors.uk',
                ],
            ],
            'part-exchange' => [
                'body' => [
                    "Part exchanging with {$brand} is the simplest way to upgrade. We value your current car fairly, show you the balance clearly, and help you move into a handpicked quality used car without dealer drama.",
                    'Send photos and details over WhatsApp, or bring the car for an on-the-spot appraisal. Once we agree figures, we handle paperwork while you focus on choosing your next drive.',
                    'Part exchange works alongside warranty options and workshop support — so your new journey starts protected and prepared.',
                ],
                'benefits' => [
                    'Competitive, realistic valuations based on condition and market demand',
                    'One conversation to sell your old car and buy your next',
                    'Transparent balance calculation before you commit',
                    'Works with our buy & sell stock across SUVs, saloons and performance cars',
                    'Same-day switches possible when paperwork and stock allow',
                ],
                'includes' => [
                    'Valuation of your current vehicle',
                    'Matching advice against available DriveX stock',
                    'Clear written / WhatsApp confirmation of figures',
                    'Paperwork support for the switch',
                    'Optional warranty discussion on the car you buy',
                ],
                'why' => [
                    'Fair dealing is part of our Quality · Trust · Value promise',
                    'No confusing small print — we explain every number',
                    'UK-based team you can message anytime on WhatsApp',
                ],
            ],
            'warranty' => [
                'body' => [
                    "Selected vehicles from {$brand} can include warranty cover so you drive with greater peace of mind. We explain what is included before you buy — no surprises after handover.",
                    'Warranty sits alongside our service and workshop offering. If something needs attention within cover, we help guide the next steps so you are never left guessing.',
                    'Ask which cars currently include warranty when you book a viewing. Cover can be a deciding factor for premium SUVs and executive saloons.',
                ],
                'benefits' => [
                    'Peace of mind on selected quality used cars',
                    'Clear explanation of what is covered',
                    'Support from a UK-based dealer after purchase',
                    'Pairs well with full service and mechanical care',
                    'Confidence for longer journeys and daily commuting',
                ],
                'includes' => [
                    'Pre-sale discussion of warranty suitability',
                    'Cover options explained in plain English',
                    'Guidance if a claim situation arises',
                    'Advice on servicing to keep cover valid where required',
                ],
                'why' => [
                    'Protected journeys match our brighter tomorrow promise',
                    'We would rather explain cover upfront than oversell',
                    'Directed by Rahul Reddy with a customer-first mindset',
                ],
            ],
            'full-service' => [
                'body' => [
                    "A full service at {$brand} keeps your car reliable, efficient and road-ready. We follow a thorough multi-point approach — oils, filters, fluids, lights, tyres and wear items — then report findings clearly.",
                    'Ideal for everyday drivers and prestige vehicles alike. Book via WhatsApp or the website form; after your thank-you message we open WhatsApp so you can confirm the slot quickly.',
                    'Regular servicing protects value, supports warranty pathways and catches small issues before they become expensive repairs.',
                ],
                'benefits' => [
                    'Comprehensive multi-point inspection',
                    'Quality parts and fluids suited to your vehicle',
                    'Clear report of findings and recommendations',
                    'Competitive pricing with no surprise extras unless agreed',
                    'Service history documentation for your records',
                ],
                'includes' => [
                    'Oil and filter service as applicable',
                    'Fluid level checks and top-ups where required',
                    'Visual inspection of brakes, tyres, lights and belts',
                    'Road-relevant safety checks',
                    'Post-service summary for the owner',
                ],
                'why' => [
                    'Workshop care from the same team that sells quality cars',
                    'Honest recommendations — only necessary work suggested',
                    'Convenient booking by WhatsApp or phone',
                ],
            ],
            'brakes' => [
                'body' => [
                    "Your brakes are critical. {$brand} diagnoses squeals, vibration, soft pedals and longer stopping distances — then repairs or replaces pads, discs and related components with quality parts.",
                    'We quote before work begins and typically replace components in axle pairs for balanced, safe braking. Many jobs are same-day when parts are available.',
                    'Combine brake work with a full service for a complete safety refresh before long trips or after buying a used car.',
                ],
                'benefits' => [
                    'Safer, sharper stopping performance',
                    'Diagnosis of noise, vibration and pedal feel issues',
                    'Quality components matched to your vehicle',
                    'Axle-pair replacements for balanced braking',
                    'Road test verification after fitting',
                ],
                'includes' => [
                    'Inspection of pads, discs, fluid and calipers',
                    'Honest quote before any work starts',
                    'Fitting of agreed parts',
                    'Post-repair road feel check',
                ],
                'why' => [
                    'Safety-first workshop standards',
                    'Competitive pricing explained clearly',
                    'UK dealer you can reach directly on WhatsApp',
                ],
            ],
            'engine-works' => [
                'body' => [
                    "Loss of power, warning lights or unusual noises need proper diagnosis. {$brand} investigates engine issues thoroughly and carries out repairs focused on lasting fixes — not temporary patches.",
                    'We combine your symptoms with professional checks, then present a transparent plan and quote. You approve before we proceed.',
                    'From sensors and ancillary repairs to more involved engine works, we keep you updated throughout so you always know the status of your car.',
                ],
                'benefits' => [
                    'Root-cause diagnosis instead of guesswork',
                    'Clear repair plan and competitive quote',
                    'Skilled mechanical work with quality parts',
                    'Progress updates during the job',
                    'Verification that the car runs correctly before handover',
                ],
                'includes' => [
                    'Symptom discussion and diagnostic assessment',
                    'Quoted repair path before work',
                    'Agreed mechanical repairs',
                    'Final running checks',
                ],
                'why' => [
                    'Experience across everyday and prestige vehicles',
                    'Honest communication when complex jobs arise',
                    'Part of a full DriveX ownership journey',
                ],
            ],
            'timing-chains' => [
                'body' => [
                    "A worn timing chain can lead to severe engine damage. {$brand} inspects rattles on cold start, related fault codes and chain condition — then replaces components with precision when required.",
                    'Early attention saves money and stress. We confirm stretch, tensioners and guides before recommending work, then verify timing and running quality after replacement.',
                    'If you have bought a used car and hear cold-start noise, book an inspection promptly — especially on engines known for chain wear.',
                ],
                'benefits' => [
                    'Protects against catastrophic engine failure',
                    'Focused inspection of chain, guides and tensioners',
                    'Precision replacement to manufacturer-aligned standards',
                    'Final verification of timing and idle quality',
                    'Clear timeframe and quote before work',
                ],
                'includes' => [
                    'Symptom and noise assessment',
                    'Condition confirmation',
                    'Agreed timing component replacement',
                    'Post-job verification',
                ],
                'why' => [
                    'Specialist care within a trusted UK dealer workshop',
                    'We explain urgency without scare tactics',
                    'Competitive quotes with no rushed decisions forced',
                ],
            ],
            'suspension' => [
                'body' => [
                    "Knocking, bouncing or uneven tyre wear often points to suspension wear. {$brand} restores comfort and control by inspecting shocks, springs, arms, bushes and mounts — then replacing what is necessary.",
                    'Only required work is recommended. After fitting we check road feel so stability and comfort are confirmed before you leave.',
                    'Good suspension also helps tyres last longer and keeps handling predictable on UK roads.',
                ],
                'benefits' => [
                    'Smoother, more controlled ride',
                    'Reduced knocks and vague handling',
                    'Better tyre wear patterns',
                    'Honest parts recommendations',
                    'Road feel confirmation after repair',
                ],
                'includes' => [
                    'Ride and component inspection',
                    'Quote for necessary replacements',
                    'Professional fitting and torque checks',
                    'Post-repair assessment',
                ],
                'why' => [
                    'Comfort and safety go together',
                    'Transparent pricing from a Coventry-based team',
                    'Easy WhatsApp booking',
                ],
            ],
            'clutch-gearbox' => [
                'body' => [
                    "Slipping clutches, high biting points or difficult gear selection need attention. {$brand} diagnoses clutch and gearbox issues and provides professional fitting so gear changes feel clean again.",
                    'You receive a clear quote covering parts and labour before work begins. After fitting we test drive engagement and selection quality.',
                    'Whether your car is a daily hatch or a performance coupe, smooth shifting is essential — ask us for an assessment.',
                ],
                'benefits' => [
                    'Restored smooth gear changes',
                    'Diagnosis of slip, noise and selection problems',
                    'Quality clutch kits where required',
                    'Transparent labour and parts pricing',
                    'Drive quality test before return',
                ],
                'includes' => [
                    'Clutch and gearbox check',
                    'Written / WhatsApp quote approval',
                    'Professional component fitting',
                    'Post-repair drive verification',
                ],
                'why' => [
                    'Careful work that protects surrounding components',
                    'Competitive quotes without pressure',
                    'Part of DriveX full workshop support',
                ],
            ],
            'remaps-ecu-tuning' => [
                'body' => [
                    "{$brand} offers remaps and ECU tuning for drivers who want sharper response, improved performance or better efficiency — always with a responsible approach tailored to your vehicle.",
                    'We confirm suitability first, discuss your goals, then apply tuning carefully. Aftercare guidance helps you get the most from the map.',
                    'Whether you drive a diesel daily or a petrol performance car, talk to us about what is realistic and safe for your ECU.',
                ],
                'benefits' => [
                    'Sharper throttle response and driveability',
                    'Performance or economy-focused options',
                    'Suitability check before any changes',
                    'Clear explanation of expected results',
                    'Aftercare guidance from the DriveX team',
                ],
                'includes' => [
                    'Vehicle suitability discussion',
                    'Baseline review of current performance',
                    'Custom remap aligned to your goals',
                    'Post-tune guidance',
                ],
                'why' => [
                    'Responsible tuning — not reckless power chasing',
                    'Honest conversation about risks and benefits',
                    'UK dealer you can follow up with easily',
                ],
            ],
        ];

        $extra = $map[$slug] ?? [
            'body' => [
                $service['intro'] ?? "{$brand} delivers {$title} with quality, trust and value.",
                'Contact us on WhatsApp or use the contact form — after thank you we open WhatsApp so you can message the owner directly.',
            ],
            'benefits' => [
                'UK-based dealer experience',
                'Competitive pricing',
                'Clear communication',
                'WhatsApp booking support',
            ],
            'includes' => [
                'Consultation and advice',
                'Agreed scope of work',
                'Quality-focused delivery',
            ],
            'why' => [
                'Cars for a brighter tomorrow',
                'More than just cars — quality people, better journeys',
            ],
        ];

        $extra['faqs'] = array_merge($service['faqs'] ?? [], [
            ['q' => 'How do I book this service?', 'a' => 'Use the contact or quote form (WhatsApp opens after thank you), call 07554959867 / 07352676590, or message us on WhatsApp directly.'],
            ['q' => 'Where are you based?', 'a' => 'DriveX Automotors UK LTD operates from Coventry, United Kingdom. Book a viewing or drop-off by appointment.'],
            ['q' => 'Do you work with all makes and models?', 'a' => 'We support a wide range of UK road cars including prestige and everyday models. Share your registration and we will confirm.'],
            ['q' => 'Can I combine this with another service?', 'a' => 'Yes — many customers combine retail, part exchange, warranty and workshop work. Ask us for a package quote.'],
        ]);

        return $extra;
    }

    public static function productExtras(array $product): array
    {
        return [
            'body' => [
                $product['description'] ?? '',
                'Every featured vehicle from DriveX Automotors UK LTD is presented with Quality · Trust · Value in mind. Stock rotates — message WhatsApp for the latest availability, mileage and options.',
                'Part exchange is welcome. Selected cars may include warranty. Book a viewing to experience the car in person before you decide.',
                'Directed by Rahul Reddy and associated with S&U Prime Autos LTD, we keep buying simple: honest answers, competitive pricing and a UK-based team you can reach anytime.',
            ],
            'buying_steps' => [
                ['title' => 'Enquire', 'text' => 'WhatsApp or call with the model you like — we confirm availability and details.'],
                ['title' => 'View', 'text' => 'Book a viewing at a time that suits you. No pressure walkthrough.'],
                ['title' => 'Agree', 'text' => 'Discuss price, part exchange and warranty options clearly.'],
                ['title' => 'Drive', 'text' => 'Complete paperwork and drive away into a brighter tomorrow.'],
            ],
            'faqs' => [
                ['q' => 'Is the price fixed?', 'a' => 'Asking prices are listed as POA / by enquiry so we can confirm current market figures and options. Contact us for an exact quote.'],
                ['q' => 'Can I part exchange?', 'a' => 'Yes. We provide competitive valuations against DriveX stock.'],
                ['q' => 'Is warranty included?', 'a' => 'Selected vehicles include warranty. Ask which cars currently come with cover.'],
                ['q' => 'How do I reserve a viewing?', 'a' => 'Tap Book for Viewing or submit the contact form — WhatsApp opens with your details after thank you.'],
            ],
        ];
    }
}
