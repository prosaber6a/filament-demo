<?php

namespace App\Filament\Admin\Resources\HRS\Schemas;

use App\Models\Agent;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Schema;

class HRForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([

                Fieldset::make('Personal Information')
                    ->columns([
                        'default' => 2,
                        'md' => 2,
                        'xl' => 2,
                    ])
                    // ->relationship('agent')
                    ->schema([

                        TextInput::make('name')
                            ->label('Name')
                            ->required(),
                        TextInput::make('father')
                            ->label('Father\'s Name'),
                        TextInput::make('mother')
                            ->label('Mother\'s Name')
                            ->nullable(),
                        DatePicker::make('dob')
                            ->label('Date of Birth')
                            ->required(),
                        TextInput::make('mofa_id')
                            ->label('MOFA ID')
                            ->required(),
                        TextInput::make('old_mofa_id')
                            ->label('Old MOFA ID')
                            ->nullable(),
                        TextInput::make('birth_place')
                            ->label('Birth Place')
                            ->required(),
                        TextInput::make('nationality')
                            ->label('Nationality')
                            ->default('Bangladesh')
                            ->required(),
                        TextInput::make('prev_nationality')
                            ->label('Previous Nationality')
                            ->nullable(),

                        Radio::make('sex')
                            ->label('Sex')
                            ->options([
                                'Male' => 'Male',
                                'Female' => 'Female',
                            ])
                            ->required()
                            ->inline(),
                        Radio::make('marital_status')
                            ->label('Marital Status')
                            ->options([
                                'Married' => 'Married',
                                'Unmarried' => 'Unmarried',
                            ])
                            ->required()
                            ->inline(),
                        TextInput::make('sect')
                            ->label('Sect')
                            ->nullable(),
                        Radio::make('religion')
                            ->label('Religion')
                            ->options([
                                'Muslim' => 'Muslim',
                                'Non-Muslim' => 'Non-Muslim',
                            ])
                            ->required()
                            ->inline(),
                        TextInput::make('address')
                            ->label('Address'),
                    ]),


                Fieldset::make('Passport Information')
                    ->columns([
                        'default' => 2,
                        'md' => 2,
                        'xl' => 2,
                    ])
                    ->schema([

                        TextInput::make('passport_no')
                            ->label('Passport Number')
                            ->required(),
                        TextInput::make('passport_issue_place')
                            ->label('Passport Issue Place')
                            ->default('Dhaka')
                            ->required(),
                        DatePicker::make('passport_issue_date')
                            ->label('Passport Issue Date')
                            ->required(),
                        DatePicker::make('passport_expiry_date')
                            ->label('Passport Expiry Date')
                            ->required(),
                    ]),

                Fieldset::make('Visa Information')
                    ->columns([
                        'default' => 2,
                        'md' => 2,
                        'xl' => 2,
                    ])
                    ->schema([

                        TextInput::make('visa_no')
                            ->label('Visa Number')
                            ->required(),
                        DatePicker::make('visa_issue_date')
                            ->label('Visa Issue Date')
                            ->required(),
                        TextInput::make('sponsor_name')
                            ->label('Sponsor Name')
                            ->required(),
                        TextInput::make('sponsor_id')
                            ->label('Sponsor ID')
                            ->required(),
                        TextInput::make('visa_issue_place_ar')
                            ->label('Visa Issue Place (Arabic)')
                            ->nullable(),
                        TextInput::make('visa_issue_place_en')
                            ->label('Visa Issue Place (English)')
                            ->nullable(),
                        TextInput::make('qualification_ar')
                            ->label('Qualification (Arabic)')
                            ->nullable(),
                        TextInput::make('qualification_en')
                            ->label('Qualification (English)')
                            ->nullable(),
                        TextInput::make('profession_ar')
                            ->label('Profession (Arabic)')
                            ->required(),
                        TextInput::make('profession_en')
                            ->label('Profession (English)')
                            ->required(),
                        TextInput::make('musaned_no')
                            ->label('Musaned Number')
                            ->nullable(),
                        TextInput::make('wakala_no')
                            ->label('Wakala Number')
                            ->required(),

                    ]),

                Fieldset::make('Others Information')
                    ->columns([
                        'default' => 2,
                        'md' => 2,
                        'xl' => 2,
                    ])
                    ->schema([

                        TextInput::make('police_clearance_no')
                            ->label('Police Clearance Number')
                            ->required(),
                        Select::make('driving_license_type')
                            ->label('Driving License Type')
                            ->options([
                                'Light' => 'Light',
                                'Medium' => 'Medium',
                                'Heavy' => 'Heavy',
                                'Motorcycle' => 'Motorcycle',
                                'Three-Wheeler' => 'Three-Wheeler',
                                'PSV' => 'PSV',
                                'Others' => 'Others',
                            ])
                            ->nullable(),
                        TextInput::make('stay_duration')
                            ->label('Stay Duration')
                            ->default('2 years')
                            ->required(),
                        Select::make('agent_id')
                            ->label('Agent')
                            ->options(Agent::where('status', 'active')->pluck('name', 'id'))
                            ->required(),
                    ])
            ]);
    }
}
