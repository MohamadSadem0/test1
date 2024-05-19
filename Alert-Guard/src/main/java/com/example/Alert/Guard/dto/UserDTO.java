package com.example.Alert.Guard.dto;

import com.example.Alert.Guard.entity.UserRole;
import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

import java.time.LocalDate;

@Data
@AllArgsConstructor
@NoArgsConstructor
public class UserDTO {
    private Long userId;
    private String username;
    private String email;
    private String gender;
    private String bloodType;
    private String phoneNumber;
    private LocalDate dateOfBirth;
    private String location;
    private UserRole role;
}